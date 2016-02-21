<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
            //
            $table->integer('school_id')->unsigned()->nullable()->after('end_time')->references('id')->on('schools');
            $table->string('address')->nullable()->after('school_id');
            $table->string('city')->nullable()->after('address');
            $table->string('state_code')->nullable()->after('city');
            $table->string('country_code')->nullable()->after('state_code');
            $table->string('postal_code')->nullable()->after('country_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activities', function (Blueprint $table) {
            //
        });
    }
}
