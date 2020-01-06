const mix = require('laravel-mix');
const tailwind = require('tailwindcss')
mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/sass/app.css', 'public/css')
   .options({
       postCss: [
           tailwind('./tailwind.config.js')
       ]
   })
