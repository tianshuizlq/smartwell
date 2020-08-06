<?php

namespace Smartwell;

use Illuminate\Support\ServiceProvider;

class SmartwellServicesProvider extends ServiceProvider
{

    public function boot()
    {
        $this->published([__DIR__ . '/../config/smartwell.php' => config_path('smartwell.php'),]);
    }

    public function register()
    {

    }
}