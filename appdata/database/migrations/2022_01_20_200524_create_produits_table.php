<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('category_id')->nullable();
            $table->foreignId('category_id')
                  ->constrained();

            $table->string('marque','200')->nullable();
            $table->string('modele','200')->nullable();

			//$table->foreignId('photoproduits_id')->nullable()->constrained();
            

            //$table->bigInteger('productcouleur_id')->nullable();
            $table->foreignId('productcouleur_id')
                ->nullable()
                ->constrained();


            $table->string('consommation','200')->nullable();
            $table->string('carburant','200')->nullable();
            $table->string('transmission','200')->nullable();
            $table->string('nbrsierge','200')->nullable();
            $table->string('nbrvitesse','200')->nullable();
            $table->string('puissancemonteur','200')->nullable();
            $table->string('nbrecylindre','200')->nullable();
            $table->string('chassis','200')->nullable();
            $table->string('nbrkm','200')->nullable();
            $table->string('Nbrportieretxt','200')->nullable();
            $table->string('Nbrportiereno','200')->nullable();
            $table->string('annecar','200')->nullable();
            $table->longText('mordetails')->nullable();
            $table->bigInteger('status')->nullable();
            $table->timestamps();
            //$table->softDeletes()->nullable();
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
        Schema::dropIfExists('produits');
    }
}
