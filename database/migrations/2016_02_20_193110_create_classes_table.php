<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('classes', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('teacher_id')->references('id')->on('users')->nullable();
            $table->string('teacher_name')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('days');
            $table->time('start_time');
            $table->time('end_time');
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
        //
        Schema::drop('classes');
    }
}
