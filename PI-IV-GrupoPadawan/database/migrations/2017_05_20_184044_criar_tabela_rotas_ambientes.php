<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaRotasAmbientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_rotas_ambientes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('ativo')->defaut(true);
            $table->integer('seq');
            $table->integer('ambiente_id')->unsigned();
            $table->integer('rota_id')->unsigned();

            /*CHAVE ESTRENGEIRA*/
            $table->foreign('ambiente_id')
                ->references('id')
                ->on('ambientes')
                ->onDelete('cascade');

            $table->foreign('rota_id')
                ->references('id')
                ->on('rotas')
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
        Schema::dropIfExists('a_rotas_ambientes');
    }
}
