<?php

namespace Aaran\Entries\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Aaran\Entries\Livewire\Sales;


class EntriesServiceProvider extends ServiceProvider
{
//    public function boot(): void
//    {
//        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
//        $this->mergeConfigFrom(__DIR__ . '/../config.php','entries');
//
//        $this->app->register(EntriesRouteServiceProvider::class);
//
//        Livewire::component('sales.index', Sales\Index::class);
//
//    }

    protected string $moduleName = 'Entries';
    protected string $moduleNameLower = 'entries';

    public function register(): void
    {
        $this->app->register(EntriesRouteServiceProvider::class);
        $this->loadConfigs();
        $this->loadViews();
    }

    public function boot(): void
    {
        $this->loadMigrations();

        Livewire::component('sales.index', Sales\Index::class);
        Livewire::component('sales.upsert', Sales\Upsert::class);


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
