<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->integer('value')->default(0);
            $table->integer('commission')->nullable();
            $table->integer('category')->default(0);
            $table->integer('course')->nullable();
            $table->integer('status')->default(0);
            $table->integer('listed')->default(0);
            $table->longText('url')->nullable();
            $table->longText('drescription')->default(0);
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
        Schema::dropIfExists('products');
    }
}
