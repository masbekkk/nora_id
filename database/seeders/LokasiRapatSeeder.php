<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LokasiRapatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\LokasiRapat::insert(array(
            array(
                'nama' => "Auditorium"
            ),
            array(
                'nama' => "Zoom"
            ),
        )
        );
    }
}
