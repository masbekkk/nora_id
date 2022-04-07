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
                'name' => "user1",
                'email' => "annisaarsylia@gmail.com",
                'password' => Hash::make('password')
            ),
            array(
                'name' => "user2",
                'email' => "abdillahromadhon512@gmail.com",
                'password' => Hash::make('password')
            ),
            array(
                'name' => "user3",
                'email' => "rohmantesting83@gmail.com",
                'password' => Hash::make('password')
            ),
            array(
                'name' => "user4",
                'email' => "igadwilestari0@gmail.com",
                'password' => Hash::make('password')
            ),
            array(
                'name' => "user5",
                'email' => "subkhanpinter22@gmail.com",
                'password' => Hash::make('password')
            ),
        )
        );
    }
}
