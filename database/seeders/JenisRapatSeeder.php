<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JenisRapatSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
