<?php

namespace TamoJuno\Test;

use TamoJuno\Plan;
use TamoJuno\ResourceRequester;

class PlanTest extends ResourceTest
{
    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(Plan::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    /** @test */
    public function testHasEndpoint()
    {
        $this->assertSame($this->resource->endpoint(), 'plans');
    }
}