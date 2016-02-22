<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role_id' => rand(1, 3)
    ];
});

$factory->defineAs(App\Models\User::class, 'studentDemo', function( Faker\Generator $faker) use($factory){
    $user = $factory->raw(App\Models\User::class);
    
    return array_merge($user, ['name' => 'Student Demo Account', 'email' => 'studentDemo@domain.com', 'password' => bcrypt('secret'), 'role_id' => 1]);
});

$factory->defineAs(App\Models\User::class, 'teacherDemo', function( Faker\Generator $faker) use($factory){
    $user = $factory->raw(App\Models\User::class);
    
    return array_merge($user, ['name' => 'Teacher Demo Account', 'email' => 'teacherDemo@domain.com', 'password' => bcrypt('secret'), 'role_id' => 2]);
});


$factory->defineAs(App\Models\User::class, 'parentDemo', function( Faker\Generator $faker) use($factory){
    $user = $factory->raw(App\Models\User::class);
    
    return array_merge($user, ['name' => 'Parent Demo Account', 'email' => 'parentDemo@domain.com', 'password' => bcrypt('secret'), 'role_id' => 3]);
});


$factory->defineAs(App\Models\User::class, 'student', function( Faker\Generator $faker) use($factory){
    $user = $factory->raw(App\Models\User::class);
    
    return array_merge($user, ['role_id' => 1]);
});

$factory->defineAs(App\Models\User::class, 'teacher', function( Faker\Generator $faker) use($factory){
    $user = $factory->raw(App\Models\User::class);
    
    return array_merge($user, ['role_id' => 2]);
});

$factory->defineAs(App\Models\User::class, 'parent', function( Faker\Generator $faker) use($factory){
    $user = $factory->raw(App\Models\User::class);
    
    return array_merge($user, ['role_id' => 3]);
});

$factory->defineAs(App\Models\User::class, 'administrator', function( Faker\Generator $faker) use($factory){
    $user = $factory->raw(App\Models\User::class);
    
    return array_merge($user, ['role_id' => 4]);
});

$factory->define(App\Models\School::class, function (Faker\Generator $faker){
    return [
        'name' => $faker->city.' School',
        'color1' => $faker->safeColorName,
        'color2' => $faker->safeColorName,
        'telephone' => $faker->phoneNumber,
        'geolat' => $faker->latitude,
        'geolong' => $faker->longitude,
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'state_code' => $faker->stateAbbr,
        'country_code' => 'USA',
        'postal_code' => $faker->postcode,
        'start_grade' => 6,
        'end_grade' => 12,
        'school_type' => 'Secondary',
        'school_district_id' => function() {
            return factory(App\Models\SchoolDistrict::class)->create()->id;
        },
        'administrator_id' => function() {
            return factory(App\Models\User::class, 'administrator')->create()->id;
        }
    ];
});

$factory->define(App\Models\SchoolDistrict::class, function (Faker\Generator $faker){
    return [
        'name' => $faker->city.' Independent School District',
        'geolat' => $faker->latitude,
        'geolong' => $faker->longitude,
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'state_code' => $faker->stateAbbr,
        'country_code' => 'USA',
        'postal_code' => $faker->postcode,
        'telephone' => $faker->phoneNumber,
        'administrator_id' => function() {
            return factory(App\Models\User::class, 'administrator')->create()->id;
        }
    ];
});

$factory->define(App\Models\Classes::class, function (Faker\Generator $faker){
   return [
        'name' => $faker->words(rand(2,5), false),
        'description' => $faker->text(rand(200,400)),
        'teacher_id' => function() {
            return factory(App\Models\User::class, 'teacher')->create()->id;
        },
        'teacher_name' => function (array $classes) {
            return App\Models\User::find($classes['teacher_id'])->name;
        },
        'start_date' => '2016-09-01',
        'end_date' => '2017-05-31',
        'days' => 'Monday, Tuesday, Wednesday, Thursday, Friday',
        'start_time' => $faker->time(),
        'end_time' => function( array $classes ){
            $timestamp = strtotime($classes['start_time']) + 60*60;
            return date('H:i', $timestamp); 
        }
    ]; 
});

$factory->define(App\Models\Activity::class, function (Faker\Generator $faker){
   return [
        'name' => $faker->words(rand(2,5), false),
        'description' => $faker->text(rand(200,400)),
        'start_date' => '2016-09-01',
        'end_date' => '2017-05-31',
        'days' => 'Monday, Wednesday, Friday',
        'start_time' => $faker->time(),
        'end_time' => function( array $classes ){
            $timestamp = strtotime($classes['start_time']) + 60*60;
            return date('H:i', $timestamp); 
        },
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state_code' => $faker->stateAbbr,
        'country_code' => 'USA',
        'postal_code' => $faker->postcode,
        'activity_type_id' => rand(1, 5)
    ]; 
});


$factory->define(App\Models\Event::class, function (Faker\Generator $faker){
   return [
       'name' => $faker->words(rand(2,5), false),
       'description' => $faker->text(rand(200,400), 2),
       'start_at' => dateTimeBetween('now', '+ 1 year'),
       'end_at' => function( array $event ){
           $new_time = date($event['start_at'], strtotime('+1 hours'));
           return $new_time;
       },
       'event_type_id' => rand(1, 5),
       'eventable_type' => 'App\Models\Classes',
       'eventable_type_id' => rand(1, 20)
    ];
});

$factory->defineAs(App\Models\Event::class, 'activity', function ( Faker\Generator $faker ) use($factory){
    $event = $factory->raw(App\Models\Event::class);
    
    return array_merge($event, ['event_type_id' => rand(6, 8), 'eventable_type' => 'App\Models\Activity',
        'eventable_type_id' => rand(1, 10)]);
});