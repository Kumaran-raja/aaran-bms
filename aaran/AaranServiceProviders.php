<?php

namespace Aaran;

use Aaran\Assets\Providers\AssetsServiceProvider;
use Aaran\Common\Providers\CommonServiceProvider;
use Aaran\Docs\Providers\DocsServiceProvider;
use Aaran\Web\Providers\WebServiceProvider;
use Illuminate\Support\ServiceProvider;

class AaranServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(AssetsServiceProvider::class);
        $this->app->register(WebServiceProvider::class);  //Docs

        $this->app->register(DocsServiceProvider::class);  //Docs
        $this->app->register(CommonServiceProvider::class); //Common
    }
}
