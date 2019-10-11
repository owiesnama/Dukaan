<?php

namespace Tests\Unit;

use App\Category;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_category_can_have_sub_categories()
    {
        $category = factory(Category::class)->create();
        $subCategory = factory(Category::class)->make();

        $this->assertCount(0, $category->children);

        $category->addSubCategory($subCategory);

        $this->assertEquals(1, $category->children()->count());
    }

    /** @test */
    public function main_categories_should_only_be_one_level()
    {
        $mainCategory = factory(Category::class)->create();
        $subCategory = factory(Category::class)->create();

        $this->assertEquals(2, Category::main()->count());

        $mainCategory->addSubCategory($subCategory);

        $this->assertEquals(1, Category::main()->count());
    }

    /** @test */
    public function a_category_cant_be_parent_to_itself()
    {
        $mainCategory = factory(Category::class)->create();
        $mainCategory->addSubCategory($mainCategory);
        $this->assertEquals(1, Category::main()->count());
    }

    /** @test */
    public function a_category_can_have_products()
    {
        $product = factory(Product::class)->make();
        $category = factory(Category::class)->create();

        $category->addProduct($product);
        $this->assertEquals($category->products()->count(), 1);
        $this->assertTrue($category->is($product->category));
    }
}
