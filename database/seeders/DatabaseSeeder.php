<?php

namespace Database\Seeders;

use Aaran\Common\Database\Seeders\S000_CommonSeeder;
use Aaran\Core\Database\Seeders\S00_CoreSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        S00_CoreSeeder::run();
        S000_CommonSeeder::run();
    }
}
