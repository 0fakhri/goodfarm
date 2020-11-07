<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'role' => 1,
            'username' => 'admin',
            'password' => bcrypt('admin'),
            
        ]);
       DB::table('users')->insert([
            'role' => 2,
            'username' => 'master',
            'password' => bcrypt('password'),
            
        ]);
       DB::table('users')->insert([
            'role' => 3,
            'username' => 'maid',
            'password' => bcrypt('password'),
            
        ]);
    }
}
