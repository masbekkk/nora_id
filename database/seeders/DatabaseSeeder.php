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
		$this->call(RoleUserSeeder::class);
		$this->call(JenisRapatSeeder::class);
		$this->call(LokasiRapatSeeder::class);
		$this->call(UsersSeeder::class);
    $this->call(PimpinanRapatSeeder::class);
    }
}
