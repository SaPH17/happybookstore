<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'category' => 'Action'
        ], [
            'category' => 'Thriller'
        ], [
            'category' => 'Comedy'
        ], [
            'category' => 'Adventure'
        ], [
            'category' => 'Drama'
        ], [
            'category' => 'Romance'
        ], [
            'category' => 'Horror'
        ], [
            'category' => 'Fantasy'
        ], [
            'category' => 'Sci-Fi'
        ], [
            'category' => 'Crime'
        ], [
            'category' => 'Biography'
        ]]);
    }
}


