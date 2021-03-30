<?php

namespace TamoJuno\Test;

use TamoJuno\DigitalAccount;
use TamoJuno\ResourceRequester;

class DigitalAccountTest extends ResourceTest
{
    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(DigitalAccount::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    /** @test */
    public function testHasEndpoint()
    {
        $this->assertSame($this->resource->endpoint(), 'digital-accounts');
    }
}