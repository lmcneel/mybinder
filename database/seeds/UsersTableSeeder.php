<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        DB::table('users')->insert([
            'name' => 'Student Demo Account',
            'email' => 'studentDemo@domain.com',
            'password' => bcrypt('secret'),
            'role_id' => 1
        ]);
        
        DB::table('users')->insert([
            'name' => 'Teacher Demo Account',
            'email' => 'teacherDemo@domain.com',
            'password' => bcrypt('secret'),
            'role_id' => 2
        ]);*/
        
        DB::table('users')->insert([
            'name' => 'Parent Demo Account',
            'email' => 'parentDemo@domain.com',
            'password' => bcrypt('secret'),
            'role_id' => 3
        ]);
    }
}
