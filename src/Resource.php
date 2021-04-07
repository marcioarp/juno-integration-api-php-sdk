<?php

namespace TamoJuno;

abstract class Resource {

    /**
     * @var \TamoJuno\ResourceRequester
     */
    public $resource_requester;

    /**
     * @param array $args
     */
    public function __construct($args = [])
    {

        if (key_exists(Config::AUTH_URL, $args)) {
            Config::setAuthUrl($args[Config::AUTH_URL]);
        }

        if (key_exists(Config::RESOURCE_URL, $args)) {
            Config::setResourceUrl($args[Config::RESOURCE_URL]);
        }

        if (key_exists(Config::PRIVATE_TOKEN, $args)) {
            Config::setPrivateToken($args[Config::PRIVATE_TOKEN]);
        }

        if (key_exists(Config::PUBLIC_TOKEN, $args)) {
            Config::setPublicToken($args[Config::PUBLIC_TOKEN]);
        }

        if (key_exists(Config::CLIENT_ID, $args)) {
            Config::setClientId($args[Config::CLIENT_ID]);
        }

        if (key_exists(Config::CLIENT_SECRET, $args)) {
            Config::setClientSecret($args[Config::CLIENT_SECRET]);
        }

        $this->resource_requester = new ResourceRequester;
    }

    abstract public function endpoint(): string;

    public function url($id = null, $action = null) {
        $endpoint = $this->endpoint();

        if (!is_null($id)) {
            $endpoint .= '/' . $id;
        }
        if (!is_null($action)){
            $endpoint .= '/' . $action;
        }
        return $endpoint;
    }

    /**
     * Create a new resource.
     *
     * @param array $form_params The request body.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $form_params = [])
    {
        return $this->resource_requester->request('POST', $this->url(), ['json' => $form_params]);
    }

    /**
     * Retrieve all resources.
     *
     * @param array $params Pagination and Filter parameters.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function allByQuery(array $params = [])
    {
        return $this->resource_requester->request('GET', $this->url(), ['query' => $params]);
    }

    /**
     * Retrieve all resources with no params required.
     *
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function all()
    {
        return $this->resource_requester->request('GET', $this->url());
    }

    /**
     * Retrieve a specific resource.
     *
     * @param int $id The resource's id.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function retrieve($id = null)
    {
        return $this->resource_requester->request('GET', $this->url($id));
    }

    /**
     * Update a specific resource by using patch.
     *
     * @param int   $id          The resource's id.
     * @param array $form_params The request body.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException*
     */
    public function updateSome(array $form_params = [])
    {
        return $this->resource_requester->request('PATCH', $this->url(), ['json' => $form_params]);
    }

    /**
     * Update a specific resource.
     *
     * @param int   $id          The resource's id.
     * @param array $form_params The request body.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update($id = null, array $form_params = [])
    {
        return $this->resource_requester->request('PUT', $this->url($id), ['json' => $form_params]);
    }

    /**
     * Delete a specific resource.
     *
     * @param int   $id          The resource's id.
     * @param array $form_params The request body.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($id = null, array $form_params = [])
    {
        return $this->resource_requester->request('DELETE', $this->url($id), ['json' => $form_params]);
    }

    /**
     * Make a GET request to an additional endpoint for a specific resource.
     *
     * @param int    $id                 The resource's id.
     * @param string $additionalEndpoint Additional endpoint that will be appended to the URL.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getById($id = null, $action = null)
    {
        return $this->resource_requester->request('GET', $this->url($id, $action));
    }

    /**
     * Make a GET request to an additional endpoint for a specific resource.
     *
     * @param int    $id                 The resource's id.
     * @param string $additionalEndpoint Additional endpoint that will be appended to the URL.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($action = null)
    {
        return $this->resource_requester->request('GET', $this->url($action));
    }

    /**
     * Make a POST request to an additional endpoint for a specific resource.
     *
     * @param int    $id                 The resource's id.
     * @param string $additionalEndpoint Additional endpoint that will be appended to the URL.
     * @param array  $form_params        The request body.
     *
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function post($id = null, $action = null, array $form_params = [])
    {
        return $this->resource_requester->request('POST', $this->url($id, $action), ['json' => $form_params]);
    }

    /**
     * Return the last response from a preview request
     *
     * @return mixed
     */
    public function getLastResponse()
    {
        return $this->resource_requester->lastResponse;
    }

}