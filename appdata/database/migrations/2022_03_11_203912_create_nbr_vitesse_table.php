<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNbrVitesseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nbr_vitesse', function (Blueprint $table) {
            $table->decimal('ID_NB_VITESS', 8, 0)->primary();
            $table->integer('NUMBER');
            $table->char('ATTRIBUT_29')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nbr_vitesse');
    }
}
