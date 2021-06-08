<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesayunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desayunos', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('registros_id')->unique()->nullable();
            
            $table->foreign('registros_id')
            ->references('id')
            ->on('registros')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('chilaquiles')->nullable();
            $table->string('huebos')->nullable();
            $table->string('hotcakes')->nullable();
            $table->string('tortas')->nullable();
            $table->integer('platos')->nullable();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desayunos');
    }
}
