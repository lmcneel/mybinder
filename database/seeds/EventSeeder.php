<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Models\Event::class, 50)->create();
       factory(App\Models\Event::class, 'activity', 30)->create();
    }
}
