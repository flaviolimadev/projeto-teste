<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContaBetfairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta_betfairs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('conta')->nullable();
            $table->string('acesso')->nullable();
            $table->integer('balance_start')->nullable();
            $table->integer('balance')->nullable();
            $table->integer('stake')->nullable();
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
        Schema::dropIfExists('conta_betfairs');
    }
}
