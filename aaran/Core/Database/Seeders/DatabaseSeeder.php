<?php

namespace Aaran\Core\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        S01_TenantSeeder::run();
        S02_RoleSeeder::run();
        S03_UserSeeder::run();
        S04_DefaultCompanySeeder::run();


        S200_CompanySeeder::run();
        S202_ContactSeeder::run();
        S203_ProductSeeder::run();
        S204_OrderSeeder::run();
        S205_StyleSeeder::run();
    }
}
