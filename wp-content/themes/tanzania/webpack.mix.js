let mix = require('laravel-mix');

mix.js('js/main.js', 'assets/scripts/').options({
    processCssUrls: false
});

mix.sass('sass/main.scss', 'assets/styles/')
    .sass('sass/blocks/hero.scss', 'assets/styles/blocks')
    .sass('sass/blocks/accordion.scss', 'assets/styles/blocks')
    .options({
    processCssUrls: false
});

mix.sourceMaps(false, 'source-map');

mix.minify([
    'assets/scripts/main.js',
    'assets/styles/main.css',
    'assets/styles/blocks/hero.css',
    'assets/styles/blocks/accordion.css'
]);

mix.browserSync({
    proxy: 'tanzania.test',
    files: [
        'assets/styles/main.min.css',
        'js/**/*.js',
        '**/*.php'
    ]
});