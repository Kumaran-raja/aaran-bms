<?php

namespace Aaran;

use Aaran\Assets\Providers\AssetsServiceProvider;
use Aaran\Core\Providers\DocsServiceProvider;
use Illuminate\Support\ServiceProvider;

class AaranServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(AssetsServiceProvider::class);
        $this->app->register(DocsServiceProvider::class);  //Docs
//        $this->app->register(CommonServiceProvider::class); //Common
    }
}
