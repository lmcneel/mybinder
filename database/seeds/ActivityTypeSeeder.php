<?php

use Illuminate\Database\Seeder;

class ActivityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_types')->insert([
            'type_slug' => 'soccer',
            'pretty_name' => 'Soccer'
        ]);
        DB::table('activity_types')->insert([
            'type_slug' => 'orchestra',
            'pretty_name' => 'Orchestra'
        ]);
        DB::table('activity_types')->insert([
            'type_slug' => 'nhs',
            'pretty_name' => 'National Honors Society'
        ]);
        DB::table('activity_types')->insert([
            'type_slug' => 'volunteer',
            'pretty_name' => 'Volunteer Services'
        ]);
        DB::table('activity_types')->insert([
            'type_slug' => 'anime-club',
            'pretty_name' => 'Anime Club'
        ]);
    }
}
