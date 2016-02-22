<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('school_districts', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->double('geolat',10,6)->nullable();
            $table->double('geolong',10,6)->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state_code')->nullable();
            $table->string('country_code')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('telephone')->nullable();
            $table->integer('administrator_id')->unsigned()->references('id')->on('users')->nullable();
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
        Schema::drop('school_districts');
    }
}
