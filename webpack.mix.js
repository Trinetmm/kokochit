let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js/app.js')
	.scripts([
			'resources/assets/js/jquery.js',
			'resources/assets/js/bootstrap.js',
			'resources/assets/js/metisMenu.js',
			'resources/assets/js/raphael.js',
			'resources/assets/js/morris.js',
			'resources/assets/js/morris-data.js',
			'resources/assets/js/sb-admin-2.js'
		], 'public/js/scripts.js')
	   .styles([
	   		'resources/assets/css/bootstrap.css',
	   		'resources/assets/css/metisMenu.css',
	   		'resources/assets/css/sb-admin-2.css',
	   		'resources/assets/css/morris.css'
	   	], 'public/css/style.css')
	   .sass('resources/assets/sass/app.scss', 'public/css/app.css')
	   .version();
