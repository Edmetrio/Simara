<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacote', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('servico_id');
            $table->foreign('servico_id')->references('id')->on('servico')->onDelete('cascade')->onUpdate('cascade');
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('icon')->nullable();
            $table->string('reserva')->nullable();
            $table->string('descricao')->nullable();
            $table->string('preco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->default('on')->nullable();
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
        Schema::dropIfExists('pacote');
    }
}
