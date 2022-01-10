<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');//clef etranger




              $table->string('marque','200')->nullable();
              $table->string('modele','200')->nullable();

              $table->longText('images_1')->nullable();
              $table->longText('images_2')->nullable();
              $table->longText('images_3')->nullable();
              $table->longText('images_4')->nullable();
              $table->longText('images_5')->nullable();
              $table->longText('images_6')->nullable();


              $table->foreignId('productcouleur_id')->constrained('product_couleurs');
              //$table->bigInteger('idcolor')->nullable();
              //$table->foreign('idcolor')->references('id')->on('product_couleurs');
            //$table->unsignedBigInteger('idcolor')->nullable();

            // $table->foreign('idcolor')
            //       ->references('id')
            //       ->on('product_couleurs');



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
              $table->softDeletes()->nullable();




              // $table->integer('category_id')->unsigned()->index()->nullable();
              // $table->foreign('category_id')
              //       ->references('id')
              //       ->on('categories')
              //       ->onDelete('set null');





              // $table->integer('productcouleur_id')->unsigned()->index()->nullable();
              // $table->foreign('productcouleur_id')
              //       ->references('id')
              //       ->on('product_couleurs')
              //       ->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints(); //on desactive les clefs
        $table->dropForeign('products_productcouleur_id_foreign'); //on suprimer les clef
        $table->dropForeign('products_category_id_foreign');
        Schema::dropIfExists('products');//on suprime la tables

    }
}
