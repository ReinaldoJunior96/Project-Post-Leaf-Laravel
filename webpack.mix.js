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

mix
    .sass('resources/views/scss/style.scss', 'public/style.css')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/jquery.js')
    .scripts('node_modules/bootstrap/dist/bootstrap.bundle.js', 'public/bootstrap.js');
