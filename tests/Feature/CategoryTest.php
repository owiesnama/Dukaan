<?php

namespace Tests\Feature;

use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_not_create_more_than_max_main_categories()
    {
        $this->signIn();
        config(['dukaan.max_categories' => 1]);

        $firstCategory = factory(Category::class)->raw();
        $this->post(route('admin.categories.store'), $firstCategory);
        $this->assertDatabaseHas('categories', $firstCategory);

        $secondCategory = factory(Category::class)->raw();
        $this->post(route('admin.categories.store'), $secondCategory);
        $this->assertDatabaseMissing('categories', $secondCategory);
    }
}
