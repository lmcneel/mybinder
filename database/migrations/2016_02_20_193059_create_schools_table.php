<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('schools', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('mascot')->nullable();
            $table->string('mascot_uri')->nullable();
            $table->string('color1')->nullable();
            $table->string('color2')->nullable();
            $table->string('telephone')->nullable();
            $table->double('geolat',10,6)->nullable();
            $table->double('geolong',10,6)->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state_code')->nullable();
            $table->string('country_code')->nullable();
            $table->string('postal_code')->nullable();
            $table->integer('start_grade')->nullable();
            $table->integer('end_grade')->nullable();
            $table->string('school_type')->nullable();
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
        Schema::drop('schools');
    }
}
