<?php

namespace TamoJuno\Http;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;
use TamoJuno\Config;

class Client extends Guzzle
{

    public function __construct(array $config = [])
    {

        try {
            $config = array_merge([
                'base_uri' => Config::getResourceUrl(),
                'headers' => [
                    'Content-Type' => 'application/json;charset=utf-8',
                    'X-Api-Version' => '2',
                    'X-Resource-Token' => Config::getPrivateToken(),
                    'Authorization' => 'Bearer ' . Client::generateAuthenticationCurl()
                ]
            ], $config);
        } catch (GuzzleException $e) {
            print_r($e->getResponse()->getBody()->getContents());
        }
        parent::__construct($config);
    }

    private function generateAuthenticationCurl():string
    {

        $curl = curl_init();

        $credentials = base64_encode(Config::getClientId() . ":" . Config::getClientSecret());

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.juno.com.br/authorization-server/oauth/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => "grant_type=client_credentials",
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic '. $credentials,
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));

        $response = json_decode(curl_exec($curl), true);
        return  $response['access_token'];
        curl_close($curl);

    }
}
