let mix = require('laravel-mix');

mix.js('js/main.js', 'assets/scripts/').sass('sass/main.scss', 'assets/styles/').options({
    processCssUrls: false
});

mix.sourceMaps(false, 'source-map');

mix.minify(['assets/scripts/main.js', 'assets/styles/main.css']);

mix.browserSync({
    proxy: 'tanzania.test',
    files: [
        'assets/styles/main.min.css',
        'js/**/*.js',
        '**/*.php'
    ]
});