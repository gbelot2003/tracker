<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    /** @test */
    public function user_screen_can_be_rendered(): void
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }
}
