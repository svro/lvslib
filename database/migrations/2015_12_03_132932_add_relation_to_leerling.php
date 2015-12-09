<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToLeerling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('klas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->integer('leerling_id')->unsigned();
            $table->timestamps();
            $table->foreign('leerling_id')
                ->references('id')->on('leerling')
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
