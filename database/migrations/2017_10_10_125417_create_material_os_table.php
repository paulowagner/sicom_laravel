<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_os', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idOs')->unsigned();
            $table->integer('idMaterial')->unsigned();
            $table->foreign('idOs')->references('id')->on('os');
            $table->foreign('idMaterial')->references('id')->on('estoques');
            $table->decimal('Valor_produto',7,3);
            $table->decimal('quantidade',7,3);
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
        Schema::dropIfExists('material_os');
    }
}
