<?php

namespace Opscale\NovaAuth0\Tests;

class ToolControllerTest extends TestCase
{
    /** @test */
    public function it_can_return_a_response()
    {
        $this
            ->get('nova-vendor/opscale-co/nova-auth0/test-case')
            ->assertStatus(403);
    }
}
