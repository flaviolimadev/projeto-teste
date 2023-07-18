<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('product_id');
            $table->string('name');
            $table->integer('value')->default(0);
            $table->integer('share_card')->default(1);
            $table->integer('recurrence')->default(0);
            $table->integer('status')->default(0);
            $table->longText('redirect')->nullable();
            $table->longText('img_top')->nullable();
            $table->longText('img_left')->nullable();
            $table->longText('img_low')->nullable();
            $table->integer('activ_pix')->default(0);
            $table->integer('activ_card')->default(0);
            $table->integer('activ_boleto')->default(0);
            $table->integer('activ_btc')->default(0);
            $table->integer('activ_eth')->default(0);
            $table->integer('activ_usd')->default(0);
            $table->integer('time_checkout')->default(0);
            $table->string('title_checkout')->default();

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
        Schema::dropIfExists('checkouts');
    }
}
