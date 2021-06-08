<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebidas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('registros_id')->unique()->nullable();
            $table->foreign('registros_id')
            ->references('id')
            ->on('registros')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            
            $table->integer('arizona')->nullable();
            $table->integer('bohemia')->nullable();
            $table->integer('cafe')->nullable();
            $table->integer('coke')->nullable();
            $table->integer('fanta')->nullable();
            $table->integer('fresca')->nullable();
            $table->integer('jugo2')->nullable();
            $table->integer('kiwi')->nullable();
            $table->integer('sangria')->nullable();
            $table->integer('sprite')->nullable();
            $table->integer('te')->nullable();
            $table->integer('jjugo1')->nullable();

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
        Schema::dropIfExists('bebidas');
    }
}
