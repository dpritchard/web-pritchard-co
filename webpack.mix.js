const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

// WARNING in child compilations (Use 'stats.children: true' resp. '--stats-children' for more details)
// mix.webpackConfig({stats: {children: true,},});

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
    })
    .version();
