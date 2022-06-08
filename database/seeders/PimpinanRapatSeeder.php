<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PimpinanRapat;

class PimpinanRapatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(__DIR__ . '/data/pemimpin_rapat.csv', 'r');

        $isHeader = false;
        while (($data = fgetcsv($csvFile, 1000, ',')) !== FALSE) {
            if (!$isHeader) {
                $lokasi = new PimpinanRapat();
                $lokasi->nama = $data[0];
                $lokasi->save();
            }
            $isHeader = false;
        }

        fclose($csvFile);
    }
}
