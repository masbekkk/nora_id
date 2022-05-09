<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTonotulensi extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('notulensis', function (Blueprint $table) {
			$table->string('no_undangan');
			$table->date('tgl');
			$table->string('lokasi');
			$table->time('waktu');
			$table->integer('id_pemimpin_rapat');
			$table->integer('id_jenis_rapat');
			$table->integer('jml_agenda');
			$table->text('tamu');
			$table->string('detail_rapat');
			$table->string('file_notulensi')->nullable();
			$table->longText('notulensi_live')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('notulensis', function (Blueprint $table) {
			//
		});
	}
}
