<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFatosRelevantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fatos_relevantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acao_id')->constrained('acoes');
            $table->foreignId('user_id')->constrained();
            $table->date('divulgado_em');
            $table->string('resumo');
            $table->string('url');
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
        Schema::dropIfExists('fatos_relevantes');
    }
}
