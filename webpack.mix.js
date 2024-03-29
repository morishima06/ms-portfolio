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

mix.js('resources/js/ajax.js', 'public/js/ajax.js')
    .js('resources/js/main.js', 'public/js/main.js')
    .sass('resources/css/custom.scss', 'public/css/custom.css')
    .sass('resources/css/dt.scss', 'public/css/dt.css');
    
