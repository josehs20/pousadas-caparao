<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPrincipalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_principal', function (Blueprint $table) {
            $table->id();
            $table->string('navBar')->nullable();
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('introducaoImage')->nullable();
            $table->string('titulointroducao')->nullable();
            $table->string('introducao', 500)->nullable();
            $table->string('sobreNos', 500)->nullable();
            $table->string('pousadaImages')->nullable();       
            $table->string('pousadaInfo', 500)->nullable();


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
        Schema::dropIfExists('info_principal');
    }
}
