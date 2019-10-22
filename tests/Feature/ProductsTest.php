<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     *
     */
    public function only_auth_user_can_view_products()
    {

        $this->get('/admin/products')
            ->assertRedirect();

        $this->withoutExceptionHandling();

        $this->signIn();

        $this->get('/admin/products')
            ->assertViewIs('admin.products.index');
    }

    /**
     * @test
     *
     */
    public function only_auth_user_can_add_products()
    {
        $product = factory('App\Product')->raw();

        $this->post('/admin/products', $product)
            ->assertRedirect();

        $this->signIn();

        $this->withoutExceptionHandling();


        $this->post('/admin/products', $product)
            ->assertRedirect('/admin/products');

        $this->assertDatabaseHas('products', $product);

    }

    /**
     * @test
     *
     */
    public function only_auth_user_can_update_products()
    {
        $product = factory('App\Product')->create();

        $product->price = "125.25";

        $product = $product->toArray();


        $this->put("/admin/products/{$product['id']}", $product)
            ->assertRedirect();

        $this->signIn();

        $this->withoutExceptionHandling();


        $this->put("/admin/products/{$product['id']}", $product)
            ->assertRedirect('/admin/products');


//        $this->assertDatabaseHas('products', $product);

    }
}
