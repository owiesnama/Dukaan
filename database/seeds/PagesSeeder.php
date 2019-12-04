<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('dukaan.pages') as $slug => $title) {
            Page::create([
                'title' => $title,
                'slug' => $slug,
                'body' => ''
            ]);
        }
    }
}
