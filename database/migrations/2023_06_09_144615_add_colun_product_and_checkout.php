<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColunProductAndCheckout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pixtxid', function (Blueprint $table) {
            //
            $table->integer('product_id')->nullable();
            $table->integer('checkout_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pixtxid', function (Blueprint $table) {
            //
            $table->dropColumn('product_id');
            $table->dropColumn('checkout_id');
        });
    }
}
