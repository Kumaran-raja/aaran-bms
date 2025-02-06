<?php

namespace Aaran\Core\Providers;

use Aaran\Core\Listeners\SetTenantIdInSession;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Aaran\Core\Livewire\Role;

class CoreServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Core';
    protected string $moduleNameLower = 'core';


    protected $listen = [Login::class=>[
        SetTenantIdInSession::class,
    ]];


    public function register(): void
    {
        $this->app->register(CoreRouteServiceProvider::class);
        $this->loadConfigs();
        $this->loadViews();
    }

    public function boot(): void
    {
        $this->loadMigrations();

        Livewire::component('tenant::index', Role\Index::class);
    }

    protected function loadConfigs(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config.php', $this->moduleNameLower);
    }

    protected function loadViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../Livewire', $this->moduleNameLower);
    }

    protected function loadMigrations(): void
    {

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
