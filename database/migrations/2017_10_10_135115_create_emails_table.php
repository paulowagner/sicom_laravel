<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('destinatario');
            $table->string('CCo');
            $table->integer('tipoDestinatario');
            $table->string('asunto');
            $table->string('mensagem',500);
            $table->integer('idUser')->nullable()->unsigned();
            $table->integer('os')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('os')->references('id')->on('os');
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
        Schema::dropIfExists('emails');
    }
}
