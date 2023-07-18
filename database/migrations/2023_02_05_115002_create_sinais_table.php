<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinais', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->default(0);
            $table->integer('status')->default(1);
            $table->string('quando');
            $table->string('liga');
            $table->string('confronto');
            $table->string('lucro');
            $table->string('casa01');
            $table->string('casa02');
            $table->string('link01');
            $table->string('link02');
            $table->string('descricao01');
            $table->string('descricao02');
            $table->string('odds01');
            $table->string('odds02');
            $table->string('avatar');
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
        Schema::dropIfExists('sinais');
    }
}
