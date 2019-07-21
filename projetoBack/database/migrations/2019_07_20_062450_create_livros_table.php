<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',60);
            $table->string('autor',60);
            $table->string('edição',60);
            $table->string('editora',60);
            $table->string('categoria',60);
            $table->unsignedBigInteger('socio_id')->nullable();
            $table->timestamps();
        });

        Schema::table('livros', function (Blueprint $table) {

            $table->foreign('socio_id')->references('id')->on('socios')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
