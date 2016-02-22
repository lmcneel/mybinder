<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(EventTypeSeeder::class);
        $this->call(ActivityTypeSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SchoolSeeder::class);
/*        $this->call(ClassesSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(EventSeeder::class);*/
    }
}
