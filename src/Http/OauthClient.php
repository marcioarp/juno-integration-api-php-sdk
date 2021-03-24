<?php

namespace TamoJuno\Http;

use GuzzleHttp\Client as Guzzle;
use TamoJuno\Config;

class OauthClient extends Guzzle
{

    public function __construct(array $config = [])
    {
        $config = array_merge([
            'base_uri' => Config::getAuthUrl(),
            'headers' => [
                'Content' => 'application/x-www-form-urlencoded',
                'X-API-Version' => '2',
                'X-Resource-Token' => Config::getPrivateToken(),
                'Authorization' => ['BASIC', '', base64_encode(Config::getClientId() . ':' . Config::getClientSecret())]
            ]
        ], $config);
        parent::__construct($config);
    }
}