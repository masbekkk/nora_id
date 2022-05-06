<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\JenisRapat::insert(array(
            array(
                'nama' => "Rapat Direktur"
            ),
            array(
                'nama' => "Rapat Senat"
            ),
        )
        );
        \App\Models\LokasiRapat::insert(array(
            array(
                'nama' => "Auditorium"
            ),
            array(
                'nama' => "Zoom"
            ),
        )
        );
        \App\Models\RoleUser::insert(array(
            array(
                'nama' => "Admin"
            ),
            array(
                'nama' => "Sekretaris"
            ),
            array(
                'nama' => "Pegawai/ Dosen"
            ),
        )
        );
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
            array(
                'name' => "pegawai4",
                'email' => "waridunnafis@gmail.com",
                'password' => Hash::make('password'),
                'role_id' => 3,
            ),
            array(
                'name' => "admin",
                'email' => "admin@nora.id",
                'password' => Hash::make('password'),
                'role_id' => 1,
            ),
            array(
                'name' => "pegawai/dosen",
                'email' => "pegawai@nora.id",
                'password' => Hash::make('password'),
                'role_id' => 3,
            ),
            array(
                'name' => "sekretaris",
                'email' => "sekretaris@nora.id",
                'password' => Hash::make('password'),
                'role_id' => 2,
            ),
        )
        );
    }
}
