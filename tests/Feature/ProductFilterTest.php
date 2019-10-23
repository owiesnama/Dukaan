<?php

namespace Tests\Feature;

use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductFilterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function should_filter_products_by_price()
    {
        $this->signIn();
        factory(Product::class)->create([
            'name' => 'Expensive',
            'price' => 1000,
        ]);

        factory(Product::class)->create([
            'name' => 'Cheap',
            'price' => 100,
        ]);

        $this->get('/admin/products?priceLessThan=1000')
            ->assertDontSee('Expensive')
            ->assertSee('Cheap');

        $this->get('/admin/products?priceMoreThan=500')
            ->assertSee('Expensive')
            ->assertDontSee('Cheap');
    }
}
