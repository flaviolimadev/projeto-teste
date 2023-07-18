<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletoIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boleto_ids', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('checkout_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('cpf')->nullable();
            $table->longText('barcode')->nullable();
            $table->longText('pix')->nullable();
            $table->longText('link')->nullable();
            $table->longText('billet_link')->nullable();
            $table->integer('charge_id')->nullable();
            $table->integer('status')->default(0);
            $table->integer('valor')->default(0);
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
        Schema::dropIfExists('boleto_ids');
    }
}
