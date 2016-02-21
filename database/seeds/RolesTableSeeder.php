<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_slug' => 'teacher',
            'pretty_name' => 'Teacher'
        ]);
        DB::table('roles')->insert([
            'role_slug' => 'parent',
            'pretty_name' => 'Parent'
        ]);
        DB::table('roles')->insert([
            'role_slug' => 'administrator',
            'pretty_name' => 'Administrator'
        ]);
    }
}
