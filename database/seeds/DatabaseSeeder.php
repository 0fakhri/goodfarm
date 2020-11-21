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
        // DB::table('users')->insert([
        //     'role' => 1,
        //     'email' => 'adminku@gmail.com',
        //     'username' => 'admin',
        //     'password' => bcrypt('admin'),
        //     'remember_token' => str_random(60),
        // ]);
        DB::table('users')->insert([
            'role' => 1,
            'username' => 'admin',
            'password' => Hash::make('admin'),
            
        ]);
       DB::table('users')->insert([
            'role' => 2,
            'username' => 'petani',
            'password' => Hash::make('password'),
            
        ]);
       DB::table('users')->insert([
            'role' => 3,
            'username' => 'investor',
            'password' => Hash::make('password'),
            
        ]);
    }
}
