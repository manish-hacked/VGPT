<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMathquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mathquestions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('type',40);
          $table->string('question');
          $table->string('qImgUrl');
          $table->string('a');
          $table->string('b');
          $table->string('c');
          $table->string('d');
          $table->string('subject');
          $table->string('aImgUrl');
          $table->string('bImgUrl');
          $table->string('cImgUrl');
          $table->string('dImgUrl');
          $table->integer('marks');
          $table->integer('negativeMarks');
          $table->unsignedInteger('test_id');
          $table->string('answer',40);
          $table->timestamps();
          $table->foreign('test_id')->references('id')->on('tests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mathquestions');
    }
}
