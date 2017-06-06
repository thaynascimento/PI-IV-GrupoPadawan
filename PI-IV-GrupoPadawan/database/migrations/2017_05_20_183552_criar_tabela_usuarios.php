<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome',255);
            $table->string('centro_custo',255);
            $table->string('email',255)->nullable();
            $table->integer('telefone')->nullable();
            $table->boolean('lider_de_fuga')->defaut(false);
            $table->boolean('ativo')->defaut(true);
            $table->integer('cargo_id')->unsigned();
            /*CHAVE ESTRENGEIRA*/
            $table->foreign('cargo_id')
                ->references('id')
                ->on('cargos')
                ->onDelete('cascade');
            $table->string('senha',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
