<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetNullableOnTableNotulensis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notulensis', function (Blueprint $table) {
            $table->integer('jml_agenda')->nullable()->change();
			$table->text('tamu')->nullable()->change();
			$table->string('agenda')->nullable()->change();
            $table->text('detail_rapat')->nullable()->change();
            $table->text('peserta_rapat')->nullable()->change();
            $table->integer('total_peserta')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
