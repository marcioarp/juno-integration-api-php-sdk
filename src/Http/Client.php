<?php

namespace TamoJuno\Http;

use GuzzleHttp\Client as Guzzle;
use TamoJuno\Config;

class Client extends Guzzle
{

    public function __construct(array $config = [])
    {
        $config = array_merge([
            'base_uri' => Config::getResourceUrl(),
            'headers' => [
                'Content' => 'application/json',
                'X-API-Version' => '2',
                'X-Resource-Token' => Config::getPrivateToken(),
                'Authorization' => 'Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX25hbWUiOiJndWlsaGVybWV3cnNhbGVzQGdtYWlsLmNvbSIsInNjb3BlIjpbImFsbCJdLCJleHAiOjE2MTY3MTczMjMsImp0aSI6IndUUW92NlpZMU9ZZWVDVnVIRUVMbmx6NWUxVSIsImNsaWVudF9pZCI6Ikpmek5Xczc5TWNkbjZqZncifQ.UHmZcl7DUKopuetiKiwmEvGDLX5NkDb5vf3rdyEXKfSehwHK_5FfKx0uIcPTqNVaMm1LT-zFFgj71cymMJLIoaOcqq2fiw0C8p5qXnB_Av3Mwt-6eKO5RsNkpQfC47f-kGYF7VAsd9IR7cgDRfrNF0q4vDQwLcCP6ZHHLe8zO8VoGb7_x5ugQPncCEqXTMxiynWD_eAl1beOXj6w4uq4r8Bvv3lZ5uWvBpB_ZVhhZewQz-BUQttfeZZhW7QNTrW0xmG_5w5SUMmmkLrzkDwQ70XKqzPWyyVDgvDep-_lXfXWgZnCZkQQ5Uh2cykMbulLxrA6C8pvu8VfxySr1fy_5g'
            ]
        ], $config);
        parent::__construct($config);
    }
}