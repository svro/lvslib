<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotLeerlingKlas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('leerling_klas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('leerling_id')->unsigned();
            $table->integer('klas_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('leerling_klas', function ($table) {
            $table->foreign('leerling_id')
                ->references('id')->on('leerling')
                ->onDelete('cascade');
            $table->foreign('klas_id')
                ->references('id')->on('klas')
                ->onDelete('cascade');
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
