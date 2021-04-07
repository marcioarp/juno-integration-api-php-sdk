<?php


namespace Test\Http;

use http\Env\Response;
use TamoJuno\Http\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * @var TamoJuno\Http\Client;
     */
    private $client;

    public function setUp(): void
    {
        $this->client = new Client();
    }

    protected function tearDown(): void
    {
        $this->client = null;
    }

    /** @test */
    public function testCallRequest() {
        $response = $this->client->request('GET', 'http://juno.com.br');

        $this->assertNull($response);
    }

    /** @test */
    public function testInitializeHeader() {
        $XResourceToken = 'DUMMY_X_RESOURCE_TOKEN';
        $Authorization = 'Bearer DUMMY_AUTH_TOKEN';
        $headers = $this->client->getConfig()['headers'];

        $this->assertEquals($headers['Content-Type'], 'application/json;charset=utf-8');
        $this->assertEquals($headers['X-Api-Version'], '2');
        $this->assertEquals($headers['X-Resource-Token'], $XResourceToken);
        $this->assertEquals($headers['Authorization'], $Authorization);
    }

//    /** @test */
//    public function testGenerateAuthenticationCurl() {
//
//    }
}