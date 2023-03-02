<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    /** @test */
    public function user_screen_can_be_rendered_by_registerd_users(): void
    {
        $response = $this->get('/users');

        $response->assertStatus(302);

        $user = User::factory()->create();

        $response2 = $this->actingAs($user)->get('/users');

        $response2->assertStatus(200);
    }



}
