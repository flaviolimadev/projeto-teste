<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsdtIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usdt_ids', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('checkout_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('cpf')->nullable();
            $table->integer('parcelas')->default(1);
            $table->integer('value_parcela')->nullable();
            $table->string('charge_id')->nullable();
            $table->integer('value')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('usdt_ids');
    }
}
