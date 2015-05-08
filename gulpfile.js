var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .scripts([
            "jquery.min.js",
            "bootstrap.min.js",
            "slick.min.js",
            "contactform.js",
            "contactscroller.js",
            "servicemanager.js",
            "enquirymanager.js",
            "slidemenu.js"
        ], "public/js/app.js", "resources/assets/js")
        .version(["css/app.css", "js/app.js"]);
});
