<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "name" => "playstation 4",
            "category" => "Consoles",
            "user_id" => 4,
            "description" => "Hele leuk console, je kan er gave games zoals CSGO op spelen"
        ]);
        DB::table('products')->insert([
            "name" => "playstation 5",
            "category" => "Consoles",
            "user_id" => 2,

        ]);
        DB::table('products')->insert([
            "name" => "AirPods",
            "category" => "Electronics",
            "user_id" => 3,

        ]);
        DB::table('products')->insert([
            "name" => "naruto volume 1",
            "category" => "Manga",
            "user_id" => 2,
            "description" => "naruto boekje, wat kan ik zeggen"

        ]);
        DB::table('products')->insert([
            "name" => "fire extinguisher",
            "category" => "Misc",
            "user_id" => 1,
            "description" => "super leuk, te gebruiken bij branden in of rondom het huis"


        ]);
    }
}
