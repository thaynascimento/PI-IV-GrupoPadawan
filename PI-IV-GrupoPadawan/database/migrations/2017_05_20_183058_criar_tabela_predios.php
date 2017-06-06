<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPredios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descricao',255);
            $table->boolean('ativo')->defaut(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localizacoes');
    }
}
