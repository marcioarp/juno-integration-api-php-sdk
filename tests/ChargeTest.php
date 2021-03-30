<?php

namespace TamoJuno\Test;

use TamoJuno\ResourceRequester;

class ChargeTest extends ResourceTest
{
    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(Charge::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    /** @test */
    public function testHasEndpoint()
    {
        $this->assertSame($this->resource->endpoint(), 'charges');
    }
}