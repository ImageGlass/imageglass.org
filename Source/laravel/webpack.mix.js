let mix = require("laravel-mix");

mix.setPublicPath("../");

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel application. By default, we are compiling the Sass
| file for the application as well as bundling up all the JS files.
|
*/

// Note: ***
// Issue: https://github.com/JeffreyWay/laravel-mix/issues/1126
// Cannot use ../ path here, must use setPublicPath
mix.js("resources/assets/js/app.js", "public/js");
mix.sass("resources/assets/sass/app.scss", "public/css");


