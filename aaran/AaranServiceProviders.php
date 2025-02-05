<?php

namespace Aaran;

use Aaran\AaranUi\Providers\AaranUiServiceProvider;
use Aaran\Base\Providers\BaseServiceProvider;
use Aaran\Common\Providers\CommonServiceProvider;
use Aaran\Docs\Providers\DocsServiceProvider;
use Illuminate\Support\ServiceProvider;

class AaranServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(AaranUiServiceProvider::class);
        $this->app->register(BaseServiceProvider::class);  //Base
        $this->app->register(DocsServiceProvider::class);  //Docs
//        $this->app->register(CommonServiceProvider::class); //Common
    }
}
