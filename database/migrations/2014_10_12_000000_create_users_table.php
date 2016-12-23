<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adm_no');
            $table->string('name');
            $table->string('class');
            $table->string('course');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('address');
            $table->integer('todays_rank');
            $table->integer('week_rank');
            $table->integer('month_rank');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
