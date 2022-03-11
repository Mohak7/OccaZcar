<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemplirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remplir', function (Blueprint $table) {
            $table->integer('ID_VEHICULE');
            $table->integer('ID_CARBURANT')->index('FK_REMPLIR');

            $table->primary(['ID_VEHICULE', 'ID_CARBURANT']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remplir');
    }
}
