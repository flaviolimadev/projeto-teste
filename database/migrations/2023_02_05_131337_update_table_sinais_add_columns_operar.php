<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableSinaisAddColumnsOperar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('sinais', function (Blueprint $table) {

            $table->string('operar01')->after('odds02');
            $table->string('operar02')->after('odds02');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         //
         Schema::table('sinais', function (Blueprint $table) {

            $table->dropColumn('operar01');
            $table->dropColumn('operar02');
        });
    }
}
