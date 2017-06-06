<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaRotaFugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotafugas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descricao',255);
            $table->boolean('ativo')->defaut(true);
            /*CHAVE ESTRENGEIRA*/
            $table->integer('sala_id')->unsigned();
            $table->foreign('sala_id')
                ->references('id')
                ->on('salas')
                ->onDelete('cascade');
            $table->string('imagem',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rotafugas');
    }
}
