<?php

namespace Tests\Feature;

use Tests\TestCase;

class GuestTest extends TestCase
{
    /**
     * Can see the welcome page.
     *
     * @return void
     */
    public function test_can_see_the_welcome_page()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Cannot see the dashboard page.
     *
     * @return void
     */
    public function test_cannot_see_the_dashboard_page()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }
}
