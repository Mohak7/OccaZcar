<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductpricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productprices', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('idprod')->nullable();//clef etranger
            $table->foreignId('product_id')->constrained('products')->nullable();//clef etranger
            $table->decimal('priceproduc', 8, 2)->nullable();
            $table->bigInteger('status')->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
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
        $table->dropForeign('productprices_product_id_id_foreign'); //on suprimer les clef
        Schema::dropIfExists('productprices');
    }
}
