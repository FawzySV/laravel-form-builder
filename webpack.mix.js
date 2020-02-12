const mix = require('laravel-mix');
// require('laravel-mix-purgecss');

mix.setPublicPath('public')
    .js('resources/js/app.js','')
    .autoload({ jquery: ['$', 'window.jQuery', 'jQuery'] })
    // .sass('resources/sass/app.scss','').purgeCss({whitelistPatterns:[/sw/,/nav/],whitelistPatternsChildren: [/sw/,/nav/]})
    .sass('resources/sass/app.scss','')
    .version();
