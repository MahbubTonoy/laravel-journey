const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


//front end resources
mix.js('resources/frontEnd/app.js', 'public/frontEnd/js')
    .sass('resources/frontEnd/app.scss', 'public/frontEnd/css', [
        //
    ])
    .copy('resources/frontEnd/assets/images/', 'public/frontEnd/images/');