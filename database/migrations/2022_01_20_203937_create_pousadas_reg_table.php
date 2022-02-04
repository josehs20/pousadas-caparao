<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePousadasRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pousadas_reg', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('descricao')->nullable();
            $table->string('cidade')->nullable();
            $table->string('localizacao')->nullable();
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
        Schema::dropIfExists('pousadas_reg');
    }
}
