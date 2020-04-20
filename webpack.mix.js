const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('assets/js/app.js', './')
   .sass('assets/scss/style.scss', './')
   .options({
      processCssUrls: false,
      postCss: [ tailwindcss('./tailwind.config.js') ]
   });