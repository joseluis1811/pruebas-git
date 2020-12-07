<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipokitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipokit', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_kit');
            $table->string('elementos_kit');
            $table->unsignedInteger('cantidad');
            $table->string('descripcion');
            $table->unsignedBigInteger('inventario_id')->unsigned();
            $table->foreign('inventario_id')->references('id')->on('inventario')->onDelete('cascade');
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
        Schema::dropIfExists('tipokit');
    }
}
