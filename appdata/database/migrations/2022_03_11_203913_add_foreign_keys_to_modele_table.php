<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToModeleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modele', function (Blueprint $table) {
            $table->foreign(['ID_MARQUE'], 'FK_APPARTENIR')->references(['ID_MARQUE'])->on('marque');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modele', function (Blueprint $table) {
            $table->dropForeign('FK_APPARTENIR');
        });
    }
}
