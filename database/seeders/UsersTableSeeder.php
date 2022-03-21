<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Paashaas',
            'email' => 'paashaas@lente.nl',
            'password' => bcrypt('paasei'),
        ]);
        DB::table('users')->insert([
            'name' => 'Abel',
            'email' => 'abeladema@hotmail.com',
            'password' => bcrypt('fuckyoubitch'),
        ]);
        DB::table('users')->insert([
            'name' => 'David',
            'email' => 'David@lente.nl',
            'password' => bcrypt('pannekoek'),
        ]);
        DB::table('users')->insert([
            'name' => 'Erik',
            'email' => 'erik@lente.nl',
            'password' => bcrypt('flapdrol'),
        ]);
        DB::table('users')->insert([
            'name' => 'Karen',
            'email' => 'karen@lente.nl',
            'password' => bcrypt('managerAUB'),
        ]);
    
    
    }
}
