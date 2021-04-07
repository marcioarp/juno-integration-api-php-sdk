<?php

namespace Test;

use TamoJuno\ResourceRequester;
use TamoJuno\Subscription;

class SubscriptionTest extends ResourceTest
{
    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(Subscription::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    /** @test */
    public function testHasEndpoint()
    {
        $this->assertSame($this->resource->endpoint(), 'subscriptions');
    }
}