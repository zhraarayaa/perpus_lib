<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Laravel: From Apprentice to Artisan',
                'author' => 'Matt Stauffer',
                'publisher' => 'O\'Reilly',
                'year_published' => 2016,
                'isbn' => '9790584572611',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel Up & Running',
                'author' => 'Taylor Otwell',
                'publisher' => 'O\'Reilly',
                'year_published' => 2015,
                'isbn' => '9795963763857',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mastering Laravel',
                'author' => 'Matt Stauffer',
                'publisher' => 'Independently',
                'year_published' => 2012,
                'isbn' => '9785201721312',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mastering Laravel',
                'author' => 'Matt Stauffer',
                'publisher' => 'Independently',
                'year_published' => 2011,
                'isbn' => '9794324473541',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel: From Apprentice to Artisan',
                'author' => 'Matt Stauffer',
                'publisher' => 'O\'Reilly',
                'year_published' => 2019,
                'isbn' => '9785438713142',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel Testing Decoded',
                'author' => 'Taylor Otwell',
                'publisher' => 'Leanpub',
                'year_published' => 2017,
                'isbn' => '9793173516232',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mastering Laravel',
                'author' => 'Shawn McCool',
                'publisher' => 'Independently',
                'year_published' => 2010,
                'isbn' => '9783701827336',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel Testing Decoded',
                'author' => 'Matt Stauffer',
                'publisher' => 'Leanpub',
                'year_published' => 2013,
                'isbn' => '9787681804721',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel: From Apprentice to Artisan',
                'author' => 'Taylor Otwell',
                'publisher' => 'O\'Reilly',
                'year_published' => 2022,
                'isbn' => '9792546961501',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mastering Laravel',
                'author' => 'Adam Wathan',
                'publisher' => 'Independently',
                'year_published' => 2024,
                'isbn' => '9795514511685',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}