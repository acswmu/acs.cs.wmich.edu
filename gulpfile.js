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
	/* Stylesheets */
	mix.sass('app.scss');
	mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
	mix.stylesIn('resources/assets/css/', 'public/css/style.css');

	/* Scripts */
	mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
	mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
	mix.scripts('resources/assets/js/', 'public/js/scripts.js');

	/* Images */
	mix.copy('resources/assets/images/', 'public/images');
});
