<?php

namespace TamoJuno\Test;

use TamoJuno\NewOnboarding;
use TamoJuno\ResourceRequester;

class NewOnboardingTest extends ResourceTest
{

    public function setUp(): void
    {
        $this->resource = $this->getMockForAbstractClass(NewOnboarding::class);
        $this->resource->resource_requester = $this->getMockBuilder(ResourceRequester::class)->getMock();
    }

    /** @test */
    public function testHasEndpoint()
    {
        $this->assertSame($this->resource->endpoint(), 'onboarding/link-request');
    }

}