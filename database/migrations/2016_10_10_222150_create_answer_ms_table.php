<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_ms', function (Blueprint $table) {
          $table->increments('id');
          $table->string('answer');
          $table->unsignedInteger('question_id');
          $table->timestamps();
          $table->foreign('question_id')->references('id')->on('mathquestions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answer_ms');
    }
}
