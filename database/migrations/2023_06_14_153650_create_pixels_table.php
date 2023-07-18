<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePixelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pixels', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('checkout_id');
            $table->integer('provedor');
            $table->integer('status')->default(0);
            $table->longText('code')->nullable();
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
        Schema::dropIfExists('pixels');
    }
}
