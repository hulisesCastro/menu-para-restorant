<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comidas', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('registros_id')->unique()->nullable();
            $table->foreign('registros_id')
            ->references('id')
            ->on('registros')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->string('entradas')->nullable();
            $table->string('garnachas')->nullable();
            $table->string('tacos')->nullable();
            $table->string('marinos')->nullable();
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
        Schema::dropIfExists('comidas');
    }
}
