<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'init_api.user.user.register' => [
            'App\Listeners\ApiCreateUserValidation',
        ],
        'init_api.user.user.update' => [
            'App\Listeners\ApiCreateUserValidation',
        ],
        'init_admin.user.user.store' => [
            'App\Listeners\CreateUserValidation',
        ],
        'init_admin.user.user.update' => [
            'App\Listeners\CreateUserValidation',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
