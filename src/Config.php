<?php

namespace TamoJuno;

use GuzzleHttp\Exception\ClientException;

class Config
{
    const AUTH_URL = 'AUTH_URL';
    const RESOURCE_URL = 'JUNO_URL';
    const PUBLIC_TOKEN = 'PUBLIC_TOKEN';
    const PRIVATE_TOKEN = 'PRIVATE_TOKEN';
    const CLIENT_ID = 'CLIENT_ID';
    const CLIENT_SECRET = 'CLIENT_SECRET';
    const X_IDEMPOTENCY_KEY = 'X_IDEMPOTENCY_KEY';

    private static $auth_url;
    private static $resource_url;
    private static $private_token;
    private static $public_token;
    private static $client_secret;
    private static $client_id;
    private static $x_idempotency_key;

    public function __construct()
    {
    }

    /**
     * @param $auth_url
     */
    public static function setAuthUrl($auth_url)
    {
        if(null === self::$auth_url) {
            self::$auth_url = $auth_url;
        }
    }

    /**
     * @param mixed $resource_url
     */
    public static function setResourceUrl($resource_url)
    {
        if(null === self::$resource_url) {
            self::$resource_url = $resource_url;
        }
    }

    /**
     * @param $private_token
     */
    public static function setPrivateToken($private_token)
    {
        if(null === self::$private_token) {
            self::$private_token = $private_token;
        }
    }

    /**
     * @param $public_token
     */
    public static function setPublicToken($public_token)
    {
        if(null === self::$public_token){
            self::$public_token = $public_token;
        }
    }

    /**
     * @param $client_id
     */
    public static function setClientId($client_id)
    {
        if(null === self::$client_id){
            self::$client_id = $client_id;
        }
    }

    /**
     * @param $client_secret
     */
    public static function setClientSecret($client_secret)
    {
        if(null === self::$client_secret){
            self::$client_secret = $client_secret;
        }
    }

    /**
     * @param $x_idempotency_key
     */
    public static function setXIdempotencyKey($x_idempotency_key)
    {
        if(null === self::$x_idempotency_key){
            self::$x_idempotency_key = $x_idempotency_key;
        }
    }

    /**
     * @return mixed
     */
    public static function getAuthUrl()
    {
        if(null !== self::$auth_url) {
            return self::$auth_url;
        }

        if(!empty(getenv(static::AUTH_URL))) {
            return getenv(static::AUTH_URL);
        }

        return 'https://api.juno.com.br/authorization-server/oauth/token/';

    }

    /**
     * @return mixed
     */
    public static function getResourceUrl()
    {
        if(null !== self::$resource_url) {
            return self::$resource_url;
        }

        if(!empty(getenv(static::RESOURCE_URL))) {
            return getenv(static::RESOURCE_URL);
        }

        return 'https://api.juno.com.br/api-integration/';
    }

    /**
     * @return string
     */
    public static function getPrivateToken()
    {
        if(null !== self::$private_token) {
            return self::$private_token;
        }

        return getenv(static::PRIVATE_TOKEN);
    }

    /**
     * @return string
     */
    public static function getPublicToken()
    {
        if(null !== self::$public_token){
            return self::$public_token;
        }

        return getenv(static::PUBLIC_TOKEN);
    }

    /**
     * @return string
     */
    public static function getClientId()
    {
        if(null !== self::$client_id){
            return self::$client_id;
        }
        return getenv(static::CLIENT_ID);
    }

    /**
     * @return string
     */
    public static function getClientSecret()
    {
        if(null !== self::$client_secret){
            return self::$client_secret;
        }
        return getenv(static::CLIENT_SECRET);
    }

    /**
     * @return string
     */
    public static function getXIdempotencyKey()
    {
        if(null !== self::$x_idempotency_key){
            return self::$x_idempotency_key;
        }
        return getenv(static::X_IDEMPOTENCY_KEY);
    }

}
