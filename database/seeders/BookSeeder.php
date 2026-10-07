<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run()
    {
        $programmingCategory = Category::where('name', 'Programming')->first();

        if ($programmingCategory) {
            $programmingCategory->books()->create([
                'title' => 'Belajar Laravel 11',
                'author' => 'Gamelab',
                'description' => 'Buku ini menjelaskan Fundamental Laravel 11.',
                'year_published' => 2023,
            ]);
        }
    }
}