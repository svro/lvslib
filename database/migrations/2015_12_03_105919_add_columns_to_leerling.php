<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToLeerling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('leerling', function ($table) {
            $table->string('inschrijvingsnummer',7);
            $table->string('voornaam',50);
            $table->string('achternaam',50);
            $table->char('geslacht',1);
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
