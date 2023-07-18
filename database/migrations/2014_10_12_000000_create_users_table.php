<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('user')->unique()->nullable();;
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('telephone')->unique()->nullable();
            $table->timestamp('telephone_verified_at')->nullable();
            $table->integer('ddi')->default(0);
            $table->string('password');
            $table->string('password_finance')->default(0);
            $table->date('birth_date')->nullable();
            $table->integer('tax_code')->unique()->nullable();
            $table->integer('status')->default(0);
            $table->integer('balance')->default(0);
            $table->integer('balance_blocked')->default(0);
            $table->integer('bonus')->default(0);
            $table->string('avatar')->default('avatar.jpg');
            $table->integer('access_level')->default(0);
            $table->rememberToken();
            $table->timestamps();

            //$table->comment('Esta tabela é responsavel por todos os usuarios da aplicação');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
