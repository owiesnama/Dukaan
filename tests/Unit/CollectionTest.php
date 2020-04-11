<?php

namespace Tests\Unit;

use App\Collection;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CollectionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_consist_of_products()
    {
        $product = factory(Product::class)->create();

        $collection = factory(Collection::class)->create();

        $collection->assign($product);

        $collection->assign($product);

        $this->assertCount(1, $collection->fresh()->products);
    }
}