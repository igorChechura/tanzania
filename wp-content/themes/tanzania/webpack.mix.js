let mix = require('laravel-mix');

mix.copyDirectory('src/fonts', 'assets/fonts');

mix.js('src/js/main.js', 'assets/scripts/').options({
    processCssUrls: false
});

mix.sass('src/sass/main.scss', 'assets/styles/')
    .sass('src/sass/blocks/hero.scss', 'assets/styles/blocks')
    .sass('src/sass/blocks/accordion.scss', 'assets/styles/blocks')
    .options({
    processCssUrls: false
});

mix.minify([
    'assets/scripts/main.js',
    'assets/styles/main.css',
    'assets/styles/blocks/hero.css',
    'assets/styles/blocks/accordion.css'
]);

mix.sourceMaps(false, 'source-map');

mix.browserSync({
    proxy: 'tanzania.test',
    files: [
        'assets/styles/main.min.css',
        'js/**/*.js',
        '**/*.php'
    ]
});