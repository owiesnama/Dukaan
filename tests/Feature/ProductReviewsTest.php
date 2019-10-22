<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductReviewsTest extends TestCase
{
    use RefreshDatabase;
    /**
     *
     * @test
     */
    public function only_auth_users_can_review_a_product()
    {
        $product = factory('App\Product')->create();

        $review = factory('App\Review')->raw();

        $this->post('/products/'.$product->id.'/reviews',$review)->assertRedirect();

        $this->signIn();

        $this->post('/products/'.$product->id.'/reviews',$review)->assertStatus(200);

    }

    /**
     *
     * @test
     */
    public function only_review_owner_can_delete_it()
    {

        $product = factory('App\Product')->create();

        $user = factory('App\User')->create();

        $review = factory('App\Review')->create([
            'product_id' => $product->id,
            'user_id'=>$user->id,
        ]);

        $this->signIn();

        $this->delete('/products/'.$product->id.'/reviews/'.$review->id)
            ->assertStatus(403);

        $this->signIn($user);

        $this->delete('/products/'.$product->id.'/reviews/'.$review->id)
            ->assertStatus(200);


    }
}
