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
        factory(App\Models\User::class, 'studentDemo',1)->create()->each(function($u){
        });
        
        factory(App\Models\User::class, 'teacherDemo',1)->create()->each(function($u){

        });
        
        factory(App\Models\User::class, 'parentDemo',1)->create()->each(function($u){
        });
        
    }
}
