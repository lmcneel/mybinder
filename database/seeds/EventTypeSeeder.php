<?php

use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_types')->insert([
            'type_slug' => 'quiz',
            'pretty_name' => 'Quiz'
        ]);
        
        DB::table('event_types')->insert([
            'type_slug' => 'test',
            'pretty_name' => 'Test'
        ]);
        
        DB::table('event_types')->insert([
            'type_slug' => 'assignment',
            'pretty_name' => 'Assignment'
        ]);
        
        DB::table('event_types')->insert([
            'type_slug' => 'project',
            'pretty_name' => 'Project'
        ]);
        
        DB::table('event_types')->insert([
            'type_slug' => 'paper',
            'pretty_name' => 'Paper'
        ]);
        
        DB::table('event_types')->insert([
            'type_slug' => 'concert',
            'pretty_name' => 'Concert'
        ]);
        
        DB::table('event_types')->insert([
            'type_slug' => 'game',
            'pretty_name' => 'Game'
        ]);
        
        DB::table('event_types')->insert([
            'type_slug' => 'meeting',
            'pretty_name' => 'Meeting'
        ]);
    }
}
