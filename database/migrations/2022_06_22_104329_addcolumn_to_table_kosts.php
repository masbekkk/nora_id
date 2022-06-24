<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddcolumnToTableKosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kosts', function (Blueprint $table) {
            $table->integer('rating')->nullable();
            $table->string('mapUrl')->nullable();
            $table->string('photos')->nullable();
            $table->integer('numberOfKithchens')->nulalable();
            $table->integer('numberOfBedrooms')->nullable();
            $table->integer('numberOfCupboards')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kosts', function (Blueprint $table) {
            //
        });
    }
}
