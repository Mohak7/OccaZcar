<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('annonce_id')->nullable()->constrained();
            $table->foreignId('modelecar_id')->nullable()->constrained();
            $table->foreignId('couleur_id')->nullable()->constrained();
            $table->foreignId('transmission_id')->nullable()->constrained();
            $table->foreignId('carburant_id')->nullable()->constrained();
            $table->char('kilomettre', 250);
            $table->char('annee', 250);
            $table->float('prix', 20, 2);
            $table->longText('description');
            $table->longText('first_proprio');

            $table->integer('status')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('vehicules');
    }
}
