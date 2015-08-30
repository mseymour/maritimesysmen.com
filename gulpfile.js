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
    mix.copy('resources/assets/css/normalize.css', 'public/css/normalize.css');
    mix.copy('resources/assets/css/webfonts', 'public/css/webfonts');
    mix.copy('resources/assets/images', 'public/img');

    mix.sass('style.scss', null, {
      includePaths: [
        './node_modules/susy/sass',
        './node_modules/breakpoint-sass/stylesheets',
        './node_modules/mathsass/dist'
      ]
    });
});
