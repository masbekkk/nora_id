<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPesertaTonotulensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notulensis', function (Blueprint $table) {
            // $table->string('agenda');
            $table->text('peserta_rapat');
            $table->integer('total_peserta');
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
