<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('servico_id');
            $table->foreign('servico_id')->references('id')->on('servico')->onDelete('cascade')->onUpdate('cascade');
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('icon')->nullable();
            $table->string('descricao')->nullable();
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
        Schema::dropIfExists('post');
    }
}
