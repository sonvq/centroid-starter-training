<?php

return [
	/*
	|--------------------------------------------------------------------------
	| The prefix that'll be used for the administration
	|--------------------------------------------------------------------------
	*/
	'admin-prefix'          => 'backend',

	/*
	|--------------------------------------------------------------------------
	| Location where your themes are located
	|--------------------------------------------------------------------------
	*/
	'themes_path'           => base_path() . '/Themes',

	/*
	|--------------------------------------------------------------------------
	| Which administration theme to use for the back end interface
	|--------------------------------------------------------------------------
	*/
	'admin-theme'           => 'AdminLTE',

	/*
	|--------------------------------------------------------------------------
	| AdminLTE skin
	|--------------------------------------------------------------------------
	| You can customize the AdminLTE colors with this setting. The following
	| colors are available for you to use: skin-blue, skin-green,
	| skin-black, skin-purple, skin-red and skin-yellow.
	*/
	'skin'                  => 'skin-blue',

	/*
	|--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    | You can customise the Middleware that should be loaded.
    | The localizationRedirect middleware is automatically loaded for both
    | Backend and Frontend routes.
    */
    'middleware' => [
       'backend' => [
           'auth.admin',
           'permissions',
       ],
       'frontend' => [
       ],
       'api' => [
       ],
    ],

   /*
   |--------------------------------------------------------------------------
	| Define which assets will be available through the asset manager
	|--------------------------------------------------------------------------
	| These assets are registered on the asset manager
	*/
	'admin-assets'          => [
		// Css
		'bootstrap.css'                => ['theme' => 'vendor/bootstrap/dist/css/bootstrap.min.css'],
		'font-awesome.css'             => ['theme' => 'vendor/font-awesome/css/font-awesome.min.css'],
		'alertify.core.css'            => ['theme' => 'css/vendor/alertify/alertify.core.css'],
		'alertify.default.css'         => ['theme' => 'css/vendor/alertify/alertify.default.css'],
		'dataTables.bootstrap.css'     => ['theme' => 'css/vendor/datatables/dataTables.bootstrap.css'],
		'icheck.blue.css'              => ['theme' => 'vendor/iCheck/skins/flat/blue.css'],
		'AdminLTE.css'                 => ['theme' => 'vendor/admin-lte/dist/css/AdminLTE.css'],
		'AdminLTE.all.skins.css'       => ['theme' => 'vendor/admin-lte/dist/css/skins/_all-skins.min.css'],
		'asgard.css'                   => ['theme' => 'css/asgard.css'],
		//'gridstack.css' => ['module' => 'dashboard:vendor/gridstack/dist/gridstack.min.css'],
		'gridstack.css'                => ['module' => 'dashboard:gridstack/gridstack.min.css'],
		'daterangepicker.css'          => ['theme' => 'vendor/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css'],
		'selectize.css'                => ['module' => 'core:vendor/selectize/dist/css/selectize.css'],
		'selectize-default.css'        => ['module' => 'core:vendor/selectize/dist/css/selectize.default.css'],
		// Javascript
		'jquery.js'                    => ['theme' => 'vendor/jquery/dist/jquery.min.js'],
		'bootstrap.js'                 => ['theme' => 'vendor/bootstrap/dist/js/bootstrap.min.js'],
		'mousetrap.js'                 => ['theme' => 'js/vendor/mousetrap.min.js'],
		'alertify.js'                  => ['theme' => 'js/vendor/alertify/alertify.js'],
		'icheck.js'                    => ['theme' => 'vendor/iCheck/icheck.min.js'],
		'jquery.dataTables.js'         => ['theme' => 'js/vendor/datatables/jquery.dataTables.js'],
		'dataTables.bootstrap.js'      => ['theme' => 'js/vendor/datatables/dataTables.bootstrap.js'],
		'jquery.slug.js'               => ['theme' => 'js/vendor/jquery.slug.js'],
		'app.js'                       => ['theme' => 'vendor/admin-lte/dist/js/app.js'],
		'keypressAction.js'            => ['module' => 'core:js/keypressAction.js'],
		'ckeditor.js'                  => ['theme' => 'js/vendor/ckeditor/ckeditor.js'],
		'lodash.js'                    => ['module' => 'dashboard:vendor/lodash/lodash.min.js'],
		'jquery-ui-core.js'            => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/core.min.js'],
		'jquery-ui-widget.js'          => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/widget.min.js'],
		'jquery-ui-mouse.js'           => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/mouse.min.js'],
		'jquery-ui-draggable.js'       => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/draggable.min.js'],
		'jquery-ui-resizable.js'       => ['module' => 'dashboard:vendor/jquery-ui/ui/minified/resizable.min.js'],
		//'gridstack.js' => ['module' => 'dashboard:vendor/gridstack/dist/gridstack.min.js'],
		'gridstack.js'                 => ['module' => 'dashboard:gridstack/gridstack.min.js'],
		'daterangepicker.js'           => ['theme' => 'vendor/admin-lte/plugins/daterangepicker/daterangepicker.js'],
		'selectize.js'                 => ['module' => 'core:vendor/selectize/dist/js/standalone/selectize.min.js'],
		'sisyphus.js'                  => ['theme' => 'vendor/sisyphus/sisyphus.min.js'],

		// select2
		'bootstrap-select.css'         => ['theme' => 'libs/bootstrap-select/css/bootstrap-select.min.css'],
		'bootstrap-select.js'          => ['theme' => 'libs/bootstrap-select/js/bootstrap-select.min.js'],

		'pace.min.js'                  => ['theme' => 'libs/pace.min.js'],

		'bootbox.js'                   => ['theme' => 'libs/bootbox.min.js'],
		'jquery.blockUI.js'            => ['theme' => 'libs/jquery.blockUI.js'],


		'main.js'                      => ['theme' => 'js/main.js'],
		'chart.js'                     => ['theme' => 'vendor/admin-lte/plugins/chartjs/Chart.js'],

		//bootstrap-datetimepicker
		'moment.js'                    => ['module' => 'core:plugins/bootstrap-datetimepicker/moment-with-locales.min.js'],
		'bootstrap-datetimepicker.js'  => ['module' => 'core:plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js'],
		'bootstrap-datetimepicker.css' => ['module' => 'core:plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css'],

    ],

	/*
	|--------------------------------------------------------------------------
	| Define which default assets will always be included in your pages
	| through the asset pipeline
	|--------------------------------------------------------------------------
	*/
	'admin-required-assets' => [
		'css' => [
			'bootstrap.css',
			'font-awesome.css',
			'alertify.core.css',
			'alertify.default.css',
			'dataTables.bootstrap.css',
			'AdminLTE.css',
			'AdminLTE.all.skins.css',
			'bootstrap-select.css',
			'bootstrap-datetimepicker.css',
			'selectize.css',
			'selectize-default.css',
			'asgard.css',
		],
		'js'  => [
			'pace.min.js',
			'jquery.js',
			'bootstrap.js',
			'mousetrap.js',
			'alertify.js',
			'icheck.js',
			'jquery.dataTables.js',
			'dataTables.bootstrap.js',
			'jquery.slug.js',
			'keypressAction.js',
			'bootstrap-select.js',
			'moment.js',
			'bootstrap-datetimepicker.js',
			'bootbox.js',
			'jquery.blockUI.js',
			'selectize.js',
			'app.js',
			'main.js',
			//'sisyphus.js', // remove it by default
		],
	],
];
