<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postres', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('registros_id')->unique()->nullable();
            $table->foreign('registros_id')
            ->references('id')
            ->on('registros')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            
            
            $table->integer('chocohuate')->nullable();
            $table->integer('donas')->nullable();
            $table->integer('flan')->nullable();
            $table->integer('galletas')->nullable();
            $table->integer('helado')->nullable();
            $table->integer('pastel')->nullable();
            $table->integer('pay')->nullable();
            $table->integer('postre')->nullable();
            $table->integer('varios')->nullable();
            $table->integer('vasos')->nullable();
            $table->integer('depositphotos_38408239-stock-photo-assorted-desserts')->nullable();
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
        Schema::dropIfExists('postres');
    }
}
