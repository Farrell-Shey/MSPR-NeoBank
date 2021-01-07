// webpack.mix.js

let mix = require('laravel-mix');

mix
    .js('src/js/app.js', 'assets/js')
    .sass('src/sass/app.scss', 'assets/css')
    .setPublicPath('public');