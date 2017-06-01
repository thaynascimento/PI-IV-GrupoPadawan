<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAndares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andares', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descricao',255);
            $table->boolean('ativo')->defaut(true);
            $table->integer('localizacao_id')->unsigned();

            /*CHAVE ESTRENGEIRA*/
            $table->foreign('localizacao_id')
                ->references('id')
                ->on('localizacoes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('andares');
    }
}
