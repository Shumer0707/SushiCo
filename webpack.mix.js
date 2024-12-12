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

mix .js('resources/js/app/app.js', 'public/js/app.js')       // Сборка JavaScript
    .js('resources/js/start/start.js', 'public/js/start.js')       // Сборка JavaScript
    .css('resources/css/app.css', 'public/css/app.css')    // Компиляция простого CSS
    .css('resources/css/adminca/adminca.css', 'public/css/adminca.css')    // Компиляция простого CSS
    .sass('resources/sass/app.scss', 'public/css/app-sass.css') // Компиляция SCSS
    .version();
