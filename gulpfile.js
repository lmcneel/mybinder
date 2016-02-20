var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*elixir(function(mix) {
    mix.sass('app.scss');
});*/

elixir(function(mix){
    mix.copy('resources/assets/bower_components/bootstrap/dist/css/bootstrap.min.css', 'public/css/app.css');
    mix.copy('resources/assets/bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
    mix.copy('resources/assets/bower_components/bootstrap/dist/fonts', 'public/fonts');
    mix.copy('resources/assets/bower_components/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.css');
    mix.copy('resources/assets/bower_components/font-awesome/fonts', 'public/fonts');
    mix.copy('resources/assets/bower_components/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
    mix.copy('resources/assets/bower_components/moment/min/moment-with-locales.min.js', 'public/js/moment-with-locales.js');
});

