<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saques', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('extract_id')->default(0);
            $table->integer('value');
            $table->integer('status')->default(0);
            $table->string('descricao');
            $table->integer('carteira_type')->default(0);
            $table->string('carteira');
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
        Schema::dropIfExists('saques');
    }
}
