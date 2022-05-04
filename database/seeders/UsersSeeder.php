<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert(array(
            array(
                'name' => "sekretaris1",
                'email' => "annisaarsylia@gmail.com",
                'password' => Hash::make('password'),
                'role_id' => 2,
            ),
            array(
                'name' => "sekretaris2",
                'email' => "abdillahromadhon512@gmail.com",
                'password' => Hash::make('password'),
                'role_id' => 2,
            ),
            array(
                'name' => "pegawai1",
                'email' => "rohmantesting83@gmail.com",
                'password' => Hash::make('password'),
                'role_id' => 3,
            ),
            array(
                'name' => "pegawai2",
                'email' => "igadwilestari0@gmail.com",
                'password' => Hash::make('password'),
                'role_id' => 3,
            ),
            array(
                'name' => "pegawai3",
                'email' => "subkhanpinter22@gmail.com",
                'password' => Hash::make('password'),
                'role_id' => 3,
            ),
        )
        );
    }
}
