<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1tomanyKlasLeerling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('leerling_klas');
        Schema::table('leerling', function ($table) {
            //$table->integer('klas_id')->unsigned();
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
