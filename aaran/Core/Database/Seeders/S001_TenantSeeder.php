<?php

namespace Aaran\Core\Database\Seeders;

use Aaran\Core\Models\Tenant;
use Illuminate\Database\Seeder;

class S001_TenantSeeder extends Seeder
{
    public static function run(): void
    {
        Tenant::create([
            'vname' => 'CODEXSUN',
            'active_id' => '1',
        ]);
    }
}
