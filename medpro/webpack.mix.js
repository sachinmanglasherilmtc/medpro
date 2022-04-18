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

mix.js('resources/assets/js/advancedform.js', 'public/assets/js')
mix.js('resources/assets/js/chart.js', 'public/assets/js')
mix.js('resources/assets/js/charts.js', 'public/assets/js')
mix.js('resources/assets/js/color-change.js', 'public/assets/js')
mix.js('resources/assets/js/construction.js', 'public/assets/js')
mix.js('resources/assets/js/custom.js', 'public/assets/js')
mix.js('resources/assets/js/datatable.js', 'public/assets/js')
mix.js('resources/assets/js/echarts.js', 'public/assets/js')
mix.js('resources/assets/js/flot.js', 'public/assets/js')
mix.js('resources/assets/js/formeditor.js', 'public/assets/js')
mix.js('resources/assets/js/form-elements.js', 'public/assets/js')
mix.js('resources/assets/js/fullcalendar.js', 'public/assets/js')
mix.js('resources/assets/js/index.js', 'public/assets/js')
mix.js('resources/assets/js/index1.js', 'public/assets/js')
mix.js('resources/assets/js/index2.js', 'public/assets/js')
mix.js('resources/assets/js/index3.js', 'public/assets/js')
mix.js('resources/assets/js/index4.js', 'public/assets/js')
mix.js('resources/assets/js/index5.js', 'public/assets/js')
mix.js('resources/assets/js/left-menu.js', 'public/assets/js')
mix.js('resources/assets/js/morris.js', 'public/assets/js')
mix.js('resources/assets/js/nvd3.js', 'public/assets/js')
mix.js('resources/assets/js/popover.js', 'public/assets/js')
mix.js('resources/assets/js/range.js', 'public/assets/js')
mix.js('resources/assets/js/stiky.js', 'public/assets/js')
mix.js('resources/assets/js/summernote.js', 'public/assets/js')
mix.js('resources/assets/js/sweet-alert.js', 'public/assets/js')
mix.js('resources/assets/js/widget.js', 'public/assets/js')
mix.sass('resources/assets/scss/style.scss', 'public/assets/css')
mix.sass('resources/assets/custom-theme/dark-style.scss', 'public/assets/css')
mix.sass('resources/assets/custom-theme/sidemenu.scss', 'public/assets/css')
mix.sass('resources/assets/custom-theme/skin-modes.scss', 'public/assets/css')
mix.sass('resources/assets/colors/color1.scss', 'public/assets/colors')
mix.sass('resources/assets/colors/color2.scss', 'public/assets/colors')
mix.sass('resources/assets/colors/color3.scss', 'public/assets/colors')
mix.sass('resources/assets/colors/color4.scss', 'public/assets/colors')
mix.sass('resources/assets/colors/color5.scss', 'public/assets/colors')
mix.copyDirectory('resources/assets/images', 'public/assets/images')
mix.copyDirectory('resources/assets/plugins', 'public/assets/plugins')
mix.options({
        processCssUrls: false
    });

    mix.browserSync('http://127.0.0.1:8000');
