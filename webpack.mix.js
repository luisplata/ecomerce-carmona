const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.sass', 'public/css')
    .copy('resources/assets/images/', 'public/img')
    .copy('resources/assets/js/jquery.min.js', 'public/js/jquery.min.js')
    .copy('resources/assets/js/jquery-ui.js', 'public/js/jquery-ui.js');
mix.sourceMaps().version();
