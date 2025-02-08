<?php

namespace Aaran\Master\Database\Seeders;

use Aaran\Master\Models\Company;
use Illuminate\Database\Seeder;

class S000_MasterSeeder extends Seeder
{
    public static function run(): void
    {
        S200_CompanySeeder::run();
    }
}
