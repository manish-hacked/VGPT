<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChemquestions2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::connection('mysql1')->create('chemquestions2', function (Blueprint $table) {
              $table->increments('id');
              $table->text('type');
              $table->text('subject');
              $table->text('chapter');
              $table->text('topic');
              $table->integer('level');
              $table->integer('topic_id');
              $table->text('questions');
              $table->text('a');
              $table->text('b');
              $table->text('c');
              $table->text('d');
              $table->text('answer');
              $table->text('questionImageUrl');
              $table->text('aImageUrl');
              $table->text('bImageUrl');
              $table->text('cImageUrl');
              $table->text('dImageUrl');
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
        Schema::drop('chemquestions2');
    }
}
