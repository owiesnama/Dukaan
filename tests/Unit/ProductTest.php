<?php

namespace Tests\Unit;

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
}
