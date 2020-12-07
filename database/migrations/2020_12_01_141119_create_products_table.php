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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            // $table->bigInteger("cantidad");
            $table->bigInteger("stock");
            $table->integer("precioActual");
            $table->integer("precioAnterior");
            $table->integer("porcentajeDescuento")->default();
            $table->text("descripcionCorta");
            $table->text("descripcionLarga");
            $table->enum("estado",['PUBLICADO','BORRADO'])->default('BORRADO');
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
        Schema::dropIfExists('products');
    }
}
