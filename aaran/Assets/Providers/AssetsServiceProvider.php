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

        //
        Blade::component('components.forms.m-panel', 'forms.m-panel');
        Blade::component('components.forms.top-controls', 'forms.top-controls');
        Blade::component('components.input.search_bar', 'input.search_bar');
        Blade::component('components.input.toggle-filter', 'input.toggle-filter');
        Blade::component('components.icons.icon', 'icons.icon');
        Blade::component('components.forms.per-page', 'forms.per-page');
        Blade::component('components.input.group', 'input.group');
        Blade::component('components.button.new-x', 'button.new-x');
        Blade::component('components.input.advance-search', 'input.advance-search');
        Blade::component('components.input.select', 'input.select');
        Blade::component('components.button.link', 'button.link');
        Blade::component('components.table.caption', 'table.caption');
        Blade::component('components.table.form', 'table.form');
        Blade::component('components.table.header-serial', 'table.header-serial');
        Blade::component('components.table.header-text', 'table.header-text');
        Blade::component('components.table.header-status', 'table.header-status');
        Blade::component('components.table.header-serial', 'table.header-serial');
        Blade::component('components.table.row', 'table.row');
        Blade::component('components.table.cell-text', 'table.cell-text');
        Blade::component('components.table.cell-status', 'table.cell-status');
        Blade::component('components.table.cell-action', 'table.cell-action');
        Blade::component('components.button.edit', 'button.edit');
        Blade::component('components.button.delete', 'button.delete');
        Blade::component('components.modal.delete', 'modal.delete');
        Blade::component('components.modal.confirmation', 'modal.confirmation');
        Blade::component('components.button.cancel-x', 'button.cancel-x');
        Blade::component('components.button.danger-x', 'button.danger-x');
        Blade::component('components.jet.modal', 'jet.modal');
        Blade::component('components.forms.create', 'forms.create');
        Blade::component('components.forms.section-border', 'forms.section-border');
        Blade::component('components.button.save-x', 'button.save-x');
        Blade::component('components.input.floating', 'input.floating');
        Blade::component('components.input.error-text', 'input.error-text');
        Blade::component('components.input.model-date', 'input.model-date');


        Blade::component('components.menu.app.side-menu', 'app.side-menu');
        Blade::component('components.menu.app.top-menu', 'app.top-menu');
        Blade::component('components.menu.app.sub.logout', 'menu-logout');

        Blade::component('components.menu.app.sub.common', 'common-header');
        Blade::component('components.menu.app.base.route-menuitem', 'common-header');
        Blade::component('components.button.e-inv', 'button.e-inv');

    }

    public function getConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'aaran-app');
        $this->mergeConfigFrom(__DIR__ . '/../software.php', 'software');
        $this->mergeConfigFrom(__DIR__ . '/../clients.php', 'clients');

        $this->mergeConfigFrom(__DIR__ . '/../Settings/developer.php', 'developer');
        $this->mergeConfigFrom(__DIR__ . '/../Settings/garment.php', 'garment');
        $this->mergeConfigFrom(__DIR__ . '/../Settings/offset.php', 'offset');
    }
}
