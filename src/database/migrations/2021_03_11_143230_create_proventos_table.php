<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proventos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acao_id')->constrained('acoes');
            $table->foreignId('user_id')->constrained();
            $table->string('tipo',4);
            $table->date('data_com');
            $table->date('pagamento_em')->nullable();
            $table->decimal('valor',8,2);
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
        Schema::dropIfExists('proventos');
    }
}
