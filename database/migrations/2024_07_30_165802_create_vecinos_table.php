<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVecinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('vecinos')) {
            Schema::create('vecinos', function (Blueprint $table) {
                $table->id('id_vecino');
                $table->string('Nombre');
                $table->string('Escalera')->nullable();
                $table->integer('Piso')->nullable();
                $table->string('Puerta')->nullable();
                $table->foreignId('id_comunidad')->constrained('comunidades')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vecinos');
    }
}
