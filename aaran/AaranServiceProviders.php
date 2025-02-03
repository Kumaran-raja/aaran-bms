<?php

namespace Aaran;

use Aaran\AaranUi\Providers\AaranUiServiceProvider;
use Aaran\Docs\Providers\DocsServiceProvider;
use Illuminate\Support\ServiceProvider;

class AaranServiceProviders extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(DocsServiceProvider::class);
        $this->app->register(AaranUiServiceProvider::class);
    }
}
