<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMathmaterials3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::connection('mysql1')->create('mathmaterials3', function (Blueprint $table) {
          $table->increments('id');
          $table->text('type');
          $table->text('fileType');
          $table->text('intranetLink');
          $table->text('internetLink');
          $table->text('subject');
          $table->text('chapter');
          $table->text('topic');
          $table->text('title');
          $table->integer('topic_id');
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
        Schema::drop('mathmaterials3');
    }
}
