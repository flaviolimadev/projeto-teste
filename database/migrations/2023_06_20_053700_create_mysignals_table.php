<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMysignalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mysignals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('estrategia_id');
            $table->integer('status')->default(1);
            $table->string('casa_01')->nullable();
            $table->string('casa_02')->nullable();
            $table->string('odd_01')->nullable();
            $table->string('odd_02')->nullable();
            $table->string('evento')->nullable();
            $table->string('mercado_01')->nullable();
            $table->string('mercado_02')->nullable();
            $table->dateTime('quando')->nullable();
            $table->integer('balance')->nullable();
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
        Schema::dropIfExists('mysignals');
    }
}
