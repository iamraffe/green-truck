var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  mix.styles(["libs/startbootstrap.css"], './public/css/libs.css');

  mix.less(['libs/bootstrap/bootstrap.less', 'custom.less'],  'public/css/all.css');

  mix.scripts(["custom.js"], "public/js/all.js", "resources/assets/js");

  mix.scripts(["libs/jquery/jquery.js", "libs/bootstrap/bootstrap.js", "libs/jquery.easing.min.js", "libs/wow.min.js","libs/owl.carousel.js"], "public/js/libs.js", "resources/assets/js");

  mix.version(['public/css/all.css', 'public/css/libs.css']);
});
