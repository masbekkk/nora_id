<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
