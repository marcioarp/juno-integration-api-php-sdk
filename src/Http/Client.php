<?php

namespace TamoJuno\Http;

use GuzzleHttp\Client as Guzzle;
use TamoJuno\Config;

class Client extends Guzzle
{

    public function __construct(array $config = [])
    {

        $this->Authorization();

        $config = array_merge([
            'base_uri' => Config::getResourceUrl(),
            'headers' => [
                'Content' => 'application/json',
                'X-API-Version' => '2',
                'X-Resource-Token' => Config::getPrivateToken(),
                'Authorization' => 'Bearer' . $this->accessToken->access_token
            ]
        ], $config);
        parent::__construct($config);
    }
}