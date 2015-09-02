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

elixir(function(mix) {
    mix.copy('resources/assets/img', 'public/img');
    mix.copy('resources/assets/css', 'public/css');
    mix.scripts(['jquery.matchHeight-min.js', 'app.js'], 'public/js/app.js');

    mix.sass('style.scss', null, {
      includePaths: [
        'node_modules/susy/sass',
        'node_modules/breakpoint-sass/stylesheets',
        'node_modules/mathsass/dist'
      ]
    });
});
