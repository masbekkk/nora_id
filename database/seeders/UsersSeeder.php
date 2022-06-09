<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::insert(
			array(
				array(
					'name' => "annisa",
					'email' => "annisaarsylia@gmail.com",
					'password' => Hash::make('password'),
					'role_id' => 2,
				),
				array(
					'name' => "denas",
					'email' => "rohmantesting83@gmail.com",
					'password' => Hash::make('password'),
					'role_id' => 3,
				),
				array(
					'name' => "iga",
					'email' => "igadwilestari0@gmail.com",
					'password' => Hash::make('password'),
					'role_id' => 3,
				),
				array(
					'name' => "subkhan",
					'email' => "mohammadsubkhan149@gmail.com",
					'password' => Hash::make('password'),
					'role_id' => 3,
				),
				array(
					'name' => "nafis",
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
