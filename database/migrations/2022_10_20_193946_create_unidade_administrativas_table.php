<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade_administrativas', function (Blueprint $table) {
            
            $table->id();
            $table->string('descricao');
<<<<<<< HEAD:database/migrations/2022_10_20_193946_create_unidade_adminstrativas_table.php


            $table->integer('setor_id');
            $table->foreign('setor_id')->references('id')->on('setors');

            
=======
>>>>>>> 61944fb86fc3f9c07041bf64002a03396dc41ad2:database/migrations/2022_10_20_193946_create_unidade_administrativas_table.php
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
        Schema::dropIfExists('unidade_administrativas');
    }
};
