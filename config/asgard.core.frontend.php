<?php
/**
 * Created by PhpStorm.
 * User: nguyentantam
 * Date: 9/21/15
 * Time: 1:14 PM
 */

return [

	'frontend-assets' => [
		// Css
		'bootstrap.css' => ['theme' => 'vendor/bootstrap/dist/css/bootstrap.min.css'],
		'font-awesome.css' => ['theme' => 'vendor/font-awesome/css/font-awesome.min.css'],
		// Javascript
		'jquery.js' => ['theme' => 'vendor/jquery/dist/jquery.min.js'],
		'bootstrap.js' => ['theme' => 'vendor/bootstrap/dist/js/bootstrap.min.js'],

	],

	/*
	|--------------------------------------------------------------------------
	| Define which default assets will always be included in your pages
	| through the asset pipeline
	|--------------------------------------------------------------------------
	*/
	'frontend-required-assets' => [
		'css' => [
			'bootstrap.css',
			'font-awesome.css',
		],
		'js' => [
			'jquery.js',
			'bootstrap.js'
		],
	],
];