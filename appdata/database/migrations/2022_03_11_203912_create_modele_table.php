<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele', function (Blueprint $table) {
            $table->integer('ID_MEDEL')->primary();
            $table->integer('ID_MARQUE')->index('FK_APPARTENIR');
            $table->char('NOM_MODELE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modele');
    }
}
