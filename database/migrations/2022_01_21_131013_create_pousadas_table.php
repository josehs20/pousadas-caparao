<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePousadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pousadas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nome')->nullable();
            $table->string('descricao')->nullable();
            $table->decimal('diaria', 5, 2)->nullable();
            $table->string('imagem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pousadas');
    }
}
