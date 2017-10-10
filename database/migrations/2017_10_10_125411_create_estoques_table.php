<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Descricao');
            $table->string('codNcm');
            $table->string('Codigo');
            $table->decimal('Valor',8,2);
            $table->decimal('Minimo',8,3);
            $table->decimal('Ideal',8,3);
            $table->decimal('QtdeVX',8,3);
            $table->decimal('QtdeGE',8,3);
            $table->decimal('QtdeUB',8,3);
            $table->decimal('QtdePM',8,3);
            $table->decimal('QtdeBR',8,3);
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
        Schema::dropIfExists('estoques');
    }
}
