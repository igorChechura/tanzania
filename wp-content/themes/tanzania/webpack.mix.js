let mix = require('laravel-mix');

mix.copyDirectory('src/fonts', 'assets/fonts');

mix.js('src/js/main.js', 'assets/scripts/').options({
    processCssUrls: false
});

mix.sass('src/sass/main.scss', 'assets/styles/')
    .sass('template-parts/blocks/slider/slider.scss', 'template-parts/blocks/slider')
    .options({
    processCssUrls: false
});

mix.minify([
    'assets/scripts/main.js',
    'assets/styles/main.css',
    'template-parts/blocks/slider/slider.css',
    'template-parts/blocks/slider/slider.js',
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