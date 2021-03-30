<?php

namespace TamoJuno\Test;

use TamoJuno\Pix;
use TamoJuno\ResourceRequester;

class PixTest extends ResourceTest
{
    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(Pix::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    /** @test */
    public function testHasEndpoint()
    {
        $this->assertSame($this->resource->endpoint(), 'pix');
    }
}