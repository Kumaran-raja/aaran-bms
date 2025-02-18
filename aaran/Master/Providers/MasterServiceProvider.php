<?php

namespace Aaran\Master\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

use Aaran\Master\Livewire\Company;
use Aaran\Master\Livewire\Contact;
use Aaran\Master\Livewire\Product;
use Aaran\Master\Livewire\Orders;
use Aaran\Master\Livewire\Style;

use Aaran\Master\Livewire\Contact\Model\ContactModel;
use Aaran\Master\Livewire\Orders\Model\OrderModel;
use Aaran\Master\Livewire\Style\Model\StyleModel;
use Aaran\Master\Livewire\Product\Model\ProductModel;


class MasterServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Master';
    protected string $moduleNameLower = 'master';

    public function register(): void
    {
        $this->app->register(MasterRouteServiceProvider::class);
        $this->loadConfigs();
        $this->loadViews();
    }

    public function boot(): void
    {
        $this->loadMigrations();

        Livewire::component('company.index', Company\Index::class);
        Livewire::component('company.upsert', Company\Upsert::class);

        Livewire::component('contact.index', Contact\Index::class);
        Livewire::component('contact.upsert', Contact\Upsert::class);


        Livewire::component('aaran.master.contact.model.contact-model', ContactModel::class);
        Livewire::component('aaran.master.order.model.order-model', OrderModel::class);
        Livewire::component('aaran.master.style.model.style-model', StyleModel::class);
        Livewire::component('aaran.master.product.model.product-model', ProductModel::class);


        Livewire::component('product.index', Product\Index::class);
        Livewire::component('orders.index', Orders\Index::class);
        Livewire::component('style.index', Style\Index::class);


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
