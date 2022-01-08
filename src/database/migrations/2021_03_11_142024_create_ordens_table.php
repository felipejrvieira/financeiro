<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acao_id')->constrained('acoes');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('fato_id')->nullable()->constrained('fatos_relevantes');
            $table->char('tipo',1);
            $table->date('efetuado_em');
            $table->integer('quantidade');
            $table->decimal('preco',8,2);
            $table->decimal('taxa',6,2);
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
        Schema::dropIfExists('ordens');
    }
}
