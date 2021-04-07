<?php

namespace Test;

use stdClass;
use TamoJuno\ResourceRequester;
use TamoJuno\Resource;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ResourceTest extends TestCase
{

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|Resource
     */
    protected $resource;

    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(Resource::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    protected function tearDown(): void
    {
        $this->resource = null;
    }

    /** @test */
    public function testIfHasEndpoint() {
        $this->expectOutputString($this->resource->endpoint());
    }

    /** @test */
    public function testCreateResource() {
        $stdClass = new StdClass;

        $this->resource->resource_requester->method('request')->willReturn($stdClass);

        $response = $this->resource->create([]);

        $this->assertSame($response, $stdClass);
    }

    /** @test */
    public function testRetrieveAllResourcesByQuery() {
        $stdClass = new StdClass;

        $this->resource->resource_requester->method('request')->willReturn([]);

        $response = $this->resource->allByQuery([]);

        $this->assertSame($response, $stdClass);
    }

    /** @test */
    public function testRetrieveAllResources() {

        $response = $this->resource->resource_requester->method('request')->willReturn([]);

        $retrieveResponse = $this->resource->all();

        $this->assertSame($response, $retrieveResponse);
    }

    /** @test */
    public function testRetrieveOneResources() {
        $stdClass = new StdClass;

        $this->resource->resource_requester->method('request')->willReturn($stdClass);

        $response = $this->resource->retrieve(1);

        $this->assertSame($response, $stdClass);
    }

    /** @test */
    public function testUpdateOneResourceUsingPatch() {
        $stdClass = new StdClass;

        $this->resource->resource_requester->method('request')->willReturn($stdClass);

        $response = $this->resource->updateSome([]);

        $this->assertSame($response, $stdClass);
    }

    /** @test */
    public function testUpdateOneResource() {
        $stdClass = new StdClass;

        $this->resource->resource_requester->method('request')->willReturn($stdClass);

        $response = $this->resource->update(1, []);

        $this->assertSame($response, $stdClass);
    }

    /** @test */
    public function testDeleteOneResource() {
        $stdClass = new StdClass;

        $this->resource->resource_requester->method('request')->willReturn($stdClass);

        $response = $this->resource->delete(1);

        $this->assertSame($response, $stdClass);
    }

    /** @test */
    public function testGetOneResourceById() {
        $stdClass = new StdClass;

        $this->resource->resource_requester->method('request')->willReturn($stdClass);

        $response = $this->resource->getById(1, 'test');

        $this->assertSame($response, $stdClass);
    }

    /** @test */
    public function testGetOneResource() {
        $stdClass = new StdClass;

        $this->resource->resource_requester->method('request')->willReturn($stdClass);

        $response = $this->resource->get('test');

        $this->assertSame($response, $stdClass);
    }


    /** @test */
    public function testPostToResource() {
        $stdClass = new StdClass;

        $this->resource->resource_requester->method('request')->willReturn($stdClass);

        $response = $this->resource->post(1, 'test', []);

        $this->assertSame($response, $stdClass);
    }










}