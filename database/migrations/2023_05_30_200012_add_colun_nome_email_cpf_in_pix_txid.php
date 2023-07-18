<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColunNomeEmailCpfInPixTxid extends Migration
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
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('cpf')->nullable();
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
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('cpf');
        });
    }
}
