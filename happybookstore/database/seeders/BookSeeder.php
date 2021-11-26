<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([[
            "category_id" => 1,
            "title" => "Jurassic Park"
        ], [
            "category_id" => 1,
            "title" => "The Three Musketeers"
        ], [
            "category_id" => 2,
            "title" => "The Guest List"
        ], [
            "category_id" => 2,
            "title" => "Strangers on a Train"
        ], [
            "category_id" => 3,
            "title" => "Me Talk Pretty One Day"
        ], [
            "category_id" => 3,
            "title" => "The Pumpkin Eater"
        ], [
            "category_id" => 4,
            "title" => "Crab with the Golden Claws (Adventures of Tintin)"
        ], [
            "category_id" => 4,
            "title" => "Moby Dick"
        ], [
            "category_id" => 5,
            "title" => "The Crucible: A Play in Four Acts"
        ], [
            "category_id" => 5,
            "title" => "The Kite Runner"
        ], [
            "category_id" => 6,
            "title" => "Pride and Prejudice"
        ], [
            "category_id" => 6,
            "title" => "Outlander"
        ], [
            "category_id" => 7,
            "title" => "Dracula"
        ], [
            "category_id" => 7,
            "title" => "The Shining"
        ], [
            "category_id" => 8,
            "title" => "Harry Potter and the Sorcerer's Stone (Book 1)"
        ], [
            "category_id" => 8,
            "title" => "Harry Potter and the Chamber of Secrets (Book 2)"
        ], [
            "category_id" => 9,
            "title" => "Dune"
        ], [
            "category_id" => 9,
            "title" => "The Martian"
        ], [
            "category_id" => 10,
            "title" => "Murder on the Orient Express"
        ], [
            "category_id" => 10,
            "title" => "Death on the Nile"
        ],]);
    }
}
