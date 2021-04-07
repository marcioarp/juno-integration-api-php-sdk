<?php

namespace Test;

use TamoJuno\CreditCard;
use TamoJuno\ResourceRequester;

class CreditCardTest extends ResourceTest
{
    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(CreditCard::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    /** @test */
    public function testHasEndpoint()
    {
        $this->assertSame($this->resource->endpoint(), 'credit-cards/tokenization');
    }
}