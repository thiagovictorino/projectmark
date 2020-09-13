<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class PostTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * @test
     */
    public function a_user_can_register_a_post()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $attributes = [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence
        ];

        $response = $this->post('/admin/posts', $attributes);

        $response->assertRedirect('/admin/posts');

        $this->assertDatabaseHas('posts', $attributes);

        $this->get('/admin/posts')->assertSee($attributes['title']);
    }

    /**
     * @test
     */
    public function a_user_cannot_register_a_post_without_title()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $attributes = [
            'description' => $this->faker->sentence
        ];

        $this->post('/admin/posts', $attributes)->assertSessionHasErrors('title');
    }

    /**
     * @test
     */
    public function a_user_cannot_register_a_post_without_description()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $attributes = [
            'title' => $this->faker->word
        ];

        $this->post('/admin/posts', $attributes)->assertSessionHasErrors('description');
    }

    /**
     * @test
     */
    public function a_user_cannot_register_a_post_logged_out()
    {

        $attributes = [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence
        ];

        $this->post('/admin/posts', $attributes)->assertRedirect('/login');
    }
}
