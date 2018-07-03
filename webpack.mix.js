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

mix.js('resources/assets/js/admin/app.js', 'public/js/admin/app.js')
	.scripts([
			'resources/assets/js/admin/jquery.js',
			'resources/assets/js/admin/bootstrap.js',
			'resources/assets/js/admin/metisMenu.js',
			'resources/assets/js/admin/raphael.js',
			'resources/assets/js/admin/morris.js',
			'resources/assets/js/admin/morris-data.js',
			'resources/assets/js/admin/sb-admin-2.js'
		], 'public/js/admin/scripts.js')
	   .styles([
	   		'resources/assets/css/admin/bootstrap.css',
	   		'resources/assets/css/admin/metisMenu.css',
	   		'resources/assets/css/admin/sb-admin-2.css',
	   		'resources/assets/css/admin/morris.css'
	   	], 'public/css/admin/style.css')
	   .sass('resources/assets/sass/admin/app.scss', 'public/css/admin/app.css')
	   .version();
