<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('URL');
            $table->string('IURL');
            $table->string('subject');
            $table->string('topic');
            $table->string('chapter');
            $table->string('description');
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
        Schema::drop('dpps');
    }
}
