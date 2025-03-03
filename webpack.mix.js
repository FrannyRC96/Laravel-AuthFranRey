const mix = require('laravel-mix');
const VueLoaderPlugin = require('vue-loader/lib/plugin');

mix.js('resources/js/app.js', 'public/js')
   .vue()
   .sass('resources/sass/app.scss', 'public/css')
   .webpackConfig({
       module: {
           rules: [
               {
                   test: /\.vue$/,
                   loader: 'vue-loader'
               },
           ],
       },
       plugins: [
           new VueLoaderPlugin(),
       ],
   });
