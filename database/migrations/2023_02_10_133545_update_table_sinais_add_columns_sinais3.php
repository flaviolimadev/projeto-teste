<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableSinaisAddColumnsSinais3 extends Migration
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

            $table->string('casa03')->default(0)->after('casa02');
            $table->string('link03')->default(0)->after('link02');
            $table->string('descricao03')->default(0)->after('descricao02');
            $table->string('odds03')->default(0)->after('odds02');
            $table->string('operar03')->default(0)->after('operar02');

            
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

            $table->dropColumn('casa03');
            $table->dropColumn('link03');
            $table->dropColumn('descricao03');
            $table->dropColumn('odds03');
            $table->dropColumn('operar03');
        });
    }
}
