<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' =>Str::random(10),
            'description' => Str::random(10).'The quick brown fox jump over the lazy dog',
            'image' => 'http://placehold.it/700x400',
            'price' => rand(10,100),
        ]);
    }
}
