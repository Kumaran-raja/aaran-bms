<?php

namespace Aaran\Temp\Database\Seeders;

use Aaran\Temp\Models\Temp;
use Illuminate\Database\Seeder;

class S000_TempSeeder extends Seeder
{
    public static function run(): void
    {
        Temp::create([
            'vname' => 'Template',
            'active_id' => '1',
        ]);
    }
}
