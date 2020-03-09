<?php

namespace Tests\Feature;

use App\Product;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductRatingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_cannot_be_rated_by_guests()
    {
        $product = factory(Product::class)->create();

        $this->post("/products/{$product->id}/rate")
            ->assertRedirect('login');

        $this->assertEmpty($product->ratings);
    }

    /** @test */
    function it_can_be_rated_by_authenticated_users()
    {
        $this->actingAs(
            $user = factory(User::class)->create()
        );

        $product = factory(Product::class)->create();

        $this->post("/products/{$product->id}/rate", ['rating' => 5]);

        $this->assertEquals(5, $product->rating());
    }

    /** @test */
    function it_can_update_a_users_rating()
    {
        $this->actingAs(
            $user = factory(User::class)->create()
        );

        $product = factory(Product::class)->create();

        $this->post("/products/{$product->id}/rate", ['rating' => 5]);


        $this->assertEquals(5, $product->rating());

        $this->post("/products/{$product->id}/rate", ['rating' => 1]);

        $this->assertEquals(1, $product->rating());
    }

    /** @test */
    function it_requires_a_valid_rating()
    {
        $this->actingAs(
            $user = factory(User::class)->create()
        );

        $product = factory(Product::class)->create();

        $this->post("/products/{$product->id}/rate")->assertSessionHasErrors('rating');
        $this->post("/products/{$product->id}/rate", ['rating' => 'foo'])->assertSessionHasErrors('rating');
    }
}
