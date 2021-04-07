<?php

namespace Test;

use TamoJuno\PicPay;
use TamoJuno\ResourceRequester;

class PicPayTest extends ResourceTest
{
    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(PicPay::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    /** @test */
    public function testHasEndpoint()
    {
        $this->assertSame($this->resource->endpoint(), 'qrcode');
    }

}