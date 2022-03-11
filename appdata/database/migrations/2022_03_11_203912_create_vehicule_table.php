<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule', function (Blueprint $table) {
            $table->integer('ID_VEHICULE')->primary();
            $table->integer('ID_ANNONCE')->index('FK_EST_CONSTITUER_DE');
            $table->integer('ID_MEDEL')->index('FK_ETRE');
            $table->integer('ID_COULEUR')->index('FK_TEINTER');
            $table->integer('ID_TRANZ')->index('FK_PASSER');
            $table->decimal('ID_NB_VITESS', 8, 0)->index('FK_CHANGER');
            $table->integer('ID_CAT')->index('FK_EST');
            $table->integer('KILOMETRE');
            $table->date('ANNEE');
            $table->decimal('PRIX', 5);
            $table->longText('DESCRIPTION');
            $table->boolean('FIRST_PROPRIO');
            $table->char('PHOTO');
            $table->integer('KW');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicule');
    }
}
