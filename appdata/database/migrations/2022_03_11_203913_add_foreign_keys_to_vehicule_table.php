<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVehiculeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicule', function (Blueprint $table) {
            $table->foreign(['ID_MEDEL'], 'FK_ETRE')->references(['ID_MEDEL'])->on('modele');
            $table->foreign(['ID_COULEUR'], 'FK_TEINTER')->references(['ID_COULEUR'])->on('couleur');
            $table->foreign(['ID_NB_VITESS'], 'FK_CHANGER')->references(['ID_NB_VITESS'])->on('nbr_vitesse');
            $table->foreign(['ID_ANNONCE'], 'FK_EST_CONSTITUER_DE')->references(['ID_ANNONCE'])->on('annonce');
            $table->foreign(['ID_TRANZ'], 'FK_PASSER')->references(['ID_TRANZ'])->on('transmission');
            $table->foreign(['ID_CAT'], 'FK_EST')->references(['ID_CAT'])->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicule', function (Blueprint $table) {
            $table->dropForeign('FK_ETRE');
            $table->dropForeign('FK_TEINTER');
            $table->dropForeign('FK_CHANGER');
            $table->dropForeign('FK_EST_CONSTITUER_DE');
            $table->dropForeign('FK_PASSER');
            $table->dropForeign('FK_EST');
        });
    }
}
