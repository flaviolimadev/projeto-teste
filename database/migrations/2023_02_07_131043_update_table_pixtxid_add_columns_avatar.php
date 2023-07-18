<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTablePixtxidAddColumnsAvatar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pixtxid', function (Blueprint $table) {

            $table->string('avatar')->default(0)->after('status');
            
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
        Schema::table('pixtxid', function (Blueprint $table) {

            $table->dropColumn('avatar');
        });
    }
}
