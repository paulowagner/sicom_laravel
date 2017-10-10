<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('os', function (Blueprint $table) {
           $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idEmpresa')->unsigned();
            $table->integer('idContato')->unsigned();
            
            
            $table->string('Acessorios');
            $table->string('Whoin');
            $table->string('Nserie');
            $table->string('Material');
            $table->string('Modelo');
            $table->string('Prioridade');
            $table->string('aprovador');
            $table->string('Servico');
            
            $table->string('Colaborador');
            $table->string('Ccusto');
            $table->string('OSExterna');

            $table->string('Inicio');
            $table->string('Fim');
            $table->string('Tempo');

            $table->decimal('Valor_mdo',7,2);
            $table->decimal('Valor_ext',7,2);

            $table->string('NContrato');
            $table->string('Status');
            $table->string('Log');
            
            $table->timestamps();
            $table->foreign('idEmpresa')->references('id')->on('clientes');
            $table->foreign('idContato')->references('id')->on('contatos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('os');
    }
}
