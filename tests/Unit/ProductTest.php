<?php

namespace Tests\Unit;

use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     *
     * @test
     */
    public function it_knows_his_path()
    {
        $product = factory('App\Product')->create();

        $this->assertEquals("/admin/products/$product->id",$product->path());
    }

    /**
     *
     * @test
     */
    public function it_can_be_reviewed()
    {
        $this->signIn();

        $product = factory('App\Product')->create();

        $product->review('its awesome');

        $this->assertCount(1,$product->reviews);
    }

    /**
     *
     * @test
     */
    public function it_can_get_most_rated()
    {
        $this->signIn();

        $product = factory('App\Product')->create();

        $product2 = factory('App\Product')->create();

        $product->rate(5);
        $product2->rate(2);

        $this->assertTrue(\App\Rating::mostRated()->get()->contains('id',$product->id));

        $this->assertFalse(\App\Rating::mostRated()->get()->contains('id',$product2->id));
    }
}
