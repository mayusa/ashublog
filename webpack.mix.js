let mix = require('laravel-mix');

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
    .js('resources/assets/js/resume/main.js', 'public/resume/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .minify('public/resume/css/align.css')
   .minify('public/resume/css/main.css')
   .minify('public/resume/css/768.css')
   .version();
