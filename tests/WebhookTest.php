<?php

namespace Test;

use TamoJuno\ResourceRequester;
use TamoJuno\Webhook;

class WebhookTest extends ResourceTest
{

    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(Webhook::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    /** @test */
    public function testHasEndpoint()
    {
        $this->assertSame($this->resource->endpoint(), 'notifications/webhooks');
    }

}