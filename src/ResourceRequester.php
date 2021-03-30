<?php

namespace TamoJuno;

use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\ResponseInterface;
use TamoJuno\Http\Client;
use TamoJuno\Http\OauthClient;

class ResourceRequester
{

    /**
     * @var \TamoJuno\Http\Client
     */
    public $client;

    /**
     * @var ResponseInterface
     */
    public $lastResponse;

    /**
     * @var array
     */
    public $lastOptions;

    /**
     * ResourceRequester constructor.
     */
    public function __construct()
    {
        $this->client = new Client;
    }

    /**
     * @param string $method   HTTP Method.
     * @param string $endpoint Relative to API base path.
     * @param array  $options  Options for the request.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */

    public function request($method, $endpoint, array $options = [])
    {
        $this->lastOptions = $options;
        try {
            $response = $this->client->request($method, $endpoint, $options);
        } catch (ClientException $e) {
            $response = $e->getResponse();
        }

        return $this->response($response);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return object
     * @throws RateLimitException
     */
    public function response(ResponseInterface $response)
    {
        $this->lastResponse = $response;

        $content = $response->getBody()->getContents();

        $decoded = json_decode($content);
        $data = $decoded;

        if (empty($decoded)) {
            reset($decoded);
            return $data = current($decoded);
        }

        return $data;
    }

}