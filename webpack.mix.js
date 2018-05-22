require('laravel-mix-purgecss');
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.js'),
        ]
    })
    .purgeCss()
    .version();
