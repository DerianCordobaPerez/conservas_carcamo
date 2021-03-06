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

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/dashboard/app.js', 'public/js/dashboard')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .postCss('resources/css/dashboard/app.css', 'public/css/dashboard', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .postCss(
        'resources/css/dashboard/vendor/@fontawesome/fontawesome-free/css/all.min.css',
        'public/css/dashboard/vendor/@fontawesome/fontawesome-free/css/all.min.css'
    )


if (mix.inProduction()) {
    mix.version();
}
