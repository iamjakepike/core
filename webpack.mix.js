let mix = require('laravel-mix');

mix.webpackConfig({
    devtool: 'source-map'
});

mix.options({
    postCss: [
        require('autoprefixer')
    ]
});

mix.js('src/js/app.js', 'dist').setPublicPath('dist');
mix.sass('src/scss/style.scss', 'dist', { 
    sassOptions: { 
        outputStyle: 'compressed' 
    },
},
    [require("tailwindcss")]
);

mix.sourceMaps();
