<?php

namespace Aaran\Assets\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AssetsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources', 'aaran-ui'); // Important: Load views from module

        $this->getComponent();
        $this->getConfig();
    }

    public function getComponent(): void
    {
        Blade::component('components.alert', 'alert'); // Name in view, class name (optional)

        Blade::component('components.menu.web.top-menu', 'web.top-menu');

        Blade::component('components.logo.aaran', 'aaran-logo');
        Blade::component('components.logo.cxlogo', 'cxlogo');

//        Blade::component('components.form.input', 'form-input');
//        Blade::component('layout.app', 'app-layout'); // Example with a different alias
//        Blade::component('layout.guest', 'guest-layout'); // Example with a different alias
    }

    public function getConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'aaran-core');
        $this->mergeConfigFrom(__DIR__ . '/../software.php', 'software');
        $this->mergeConfigFrom(__DIR__ . '/../clients.php', 'clients');
    }
}
