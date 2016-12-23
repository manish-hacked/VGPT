<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhyvideos1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::connection('mysql1')->create('phyvideos1', function (Blueprint $table) {
              $table->increments('id');
              $table->text('type');
              $table->text('title');
              $table->text('description');
              $table->text('sourceType');
              $table->text('intranetLink');
              $table->text('internetLink');
              $table->text('subject');
              $table->text('chapter');
              $table->text('topic');
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
        Schema::drop('phyvideos1');
    }
}
