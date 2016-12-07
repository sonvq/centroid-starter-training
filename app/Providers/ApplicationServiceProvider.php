<?php
/**
 * Created by PhpStorm.
 * User: nguyentantam
 * Date: 3/15/16
 * Time: 2:30 PM
 */

namespace App\Providers;

use Illuminate\Foundation\Application;

class ApplicationServiceProvider extends Application
{
    public function bindShared($abstract, $concrete = null)
    {
        parent::singleton($abstract, $concrete);
    }

}