<?php

namespace Aaran\Core\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Auth\Events\Login;
use Aaran\Core\Listeners\SetTenantIdInSession;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Login::class => [
            SetTenantIdInSession::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
