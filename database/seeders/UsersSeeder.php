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
