<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActvitiesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actvities_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->unsigned()->references('id')->on('activities');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
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
        Schema::drop('actvities_users');
    }
}
