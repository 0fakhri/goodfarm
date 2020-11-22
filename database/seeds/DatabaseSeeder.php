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

        DB::table('alamat')->insert([
            'alamat' => 'jln mt haryono 11',
            'kota' => 'Kab Jember',
            'provinsi' => 'Jawa Timur',          
        ]);

        DB::table('ca_farmer')->insert([
            'id_user' => '2',
            'nama_petani'    => 'petani1',
            'no_ponsel_petani'    => '087791329232',
            'tanggal_lahir_petani'    => '2020-11-01',
            'jenis_kelamin'    => '1',
            'jenis_identitas'   => '2',
            'no_identitas_petani'    => '2734838',
            'id_alamat'    => '1',
            'email_petani'    => 'indsmnz15@gmail.com',
            'foto_ktp_petani'    => 'storage/img/1606006873.jpg',
            'foto_lahan_hidroponik' => 'storage/img/1606007450.jpg',            
        ]);

        DB::table('alamat')->insert([
            'alamat' => 'jln varshabyanka 008',
            'kota' => 'Kab Lamongan',
            'provinsi' => 'Jawa Timur',          
        ]);

        DB::table('ca_investor')->insert([
            'id_user' => '3',
            'nama_investor'    => 'investor1',
            'no_ponsel_investor'    => '087791329232',
            'tanggal_lahir_investor'    => '2020-11-02',
            'jenis_kelamin'    => '2',
            'jenis_identitas'   => '3',
            'no_identitas_investor'    => '873883',
            'id_alamat'    => '2',
            'email_investor'    => 'mohfahrulhafidh@gmail.com',
            'foto_ktp_investor'    => 'storage/img/1606006873.jpg',         
        ]);
    }
}
