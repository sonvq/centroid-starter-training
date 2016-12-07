<?php
use Illuminate\Routing\Router;
use Modules\Core\Common\Utilhelper\Utilhelper;

    $router->get("/",function(){
        return Redirect::route('dashboard.index');
    });
// Group language
$router->group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localizationRedirect'] ], function (Router $router) {

    $router->get("/",function(){
        return Redirect::route('dashboard.index');
    });

    // Group admin
    $router->group(['prefix' => config('asgard.core.core.admin-prefix'), 'middleware' => ['auth.admin', 'permissions']], function (Router $router){

        // Dashboard
        if($path = Utilhelper::load_route('Dashboard')) { require $path; }

        // Media
        if($path = Utilhelper::load_route('Media')) { require $path; }

        // Setting
        if($path = Utilhelper::load_route('Setting')) { require $path; }

        // User
        if($path = Utilhelper::load_route('User')) { require $path; }

        // Workshop
        if($path = Utilhelper::load_route('Workshop')) { require $path; }

        if($path = Utilhelper::load_route('Notify')) { require $path; }

        if($path = Utilhelper::load_route('Content')) { require $path; }

        if($path = Utilhelper::load_route('Location')) { require $path; }
        
        if($path = Utilhelper::load_route('Audittrail')) { require $path; }


        if($path = Utilhelper::load_route('Socialite')) { require $path; }

        if($path = Utilhelper::load_route('InterviewQuestion')) { require $path; }



    });

    // Frontend group

    // Media
    if ($path = Utilhelper::load_route('Media', 'frontend')) {
        require $path;
    }

    // User
    if($path = Utilhelper::load_route('User','frontend')) { require $path; }
    if($path = Utilhelper::load_route('Socialite','frontend')) { require $path; }

});




$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {

    // Media
    if($path = Utilhelper::load_route('Media', 'api')) { require $path; }

    // Workshop
    if($path = Utilhelper::load_route('Workshop', 'api')) { require $path; }

    // User
    if($path = Utilhelper::load_route('User', 'api')) { require $path; }

    if($path = Utilhelper::load_route('Notify', 'api')) { require $path; }

    if($path = Utilhelper::load_route('Content', 'api')) { require $path; }

    if($path = Utilhelper::load_route('Location', 'api')) { require $path; }

    if($path = Utilhelper::load_route('Socialite', 'api')) { require $path; }


});