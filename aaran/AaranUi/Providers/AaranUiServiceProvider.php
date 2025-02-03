<?php

namespace Aaran\AaranUi\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AaranUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'aaran-ui'); // Important: Load views from module


        Blade::component('components.alert', 'alert'); // Name in view, class name (optional)
//        Blade::component('components.form.input', 'form-input');
//        Blade::component('layout.app', 'app-layout'); // Example with a different alias
//        Blade::component('layout.guest', 'guest-layout'); // Example with a different alias
    }
}
