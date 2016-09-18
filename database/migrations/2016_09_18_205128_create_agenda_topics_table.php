<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('agenda_topics', function(Blueprint $table) {
        /* ID's */
        $table->increments('id');
        $table->integer('user_id')->unsigned()->nullable();

        /* Data */
        $table->string('topic');
        $table->text('description')->nullable();
        $table->boolean('old_business')->default(false);
        $table->boolean('resolved')->default(false);
        $table->boolean('important')->default(false);

        /* Dates and times */
        $table->date('resolved_on')->nullable();
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
      Schema::drop('agenda_topics');
    }
}
