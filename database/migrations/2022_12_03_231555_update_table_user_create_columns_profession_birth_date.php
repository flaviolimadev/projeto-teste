<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableUserCreateColumnsProfessionBirthDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {

            $table->string('profession')->default(0)->after('birth_date');
            $table->longText('biography')->nullable()->after('birth_date');
            
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
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('profession');
            $table->dropColumn('biography');
        });
    }
}
