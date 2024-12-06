const mix = require('laravel-mix');

mix    
    .js('resources/js/modul/blasting.js', 'public/js/modul/blasting.js')
    .js('resources/js/modul/hrd.js', 'public/js/modul/hrd.js')    
    .vue()
    .webpackConfig({
        output: {
            publicPath: process.env.MIX_PUBLIC_PATH || '/',
            chunkFilename: 'js/[name].[chunkhash].js',
        }
    })
    .sass('resources/sass/app.scss', 'public/css');    
