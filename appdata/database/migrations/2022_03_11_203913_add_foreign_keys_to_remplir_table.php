<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRemplirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('remplir', function (Blueprint $table) {
            $table->foreign(['ID_CARBURANT'], 'FK_REMPLIR')->references(['ID_CARBURANT'])->on('carburant');
            $table->foreign(['ID_VEHICULE'], 'FK_REMPLIR2')->references(['ID_VEHICULE'])->on('vehicule');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('remplir', function (Blueprint $table) {
            $table->dropForeign('FK_REMPLIR');
            $table->dropForeign('FK_REMPLIR2');
        });
    }
}
