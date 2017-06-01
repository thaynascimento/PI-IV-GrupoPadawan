<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaTiposAmbiente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_ambiente', function (Blueprint $table) {
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
        Schema::dropIfExists('tipos_ambiente');
    }
}
