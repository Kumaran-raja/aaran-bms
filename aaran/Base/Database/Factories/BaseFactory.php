<?php

namespace Aaran\Base\Database\Factories;

use Aaran\Base\Models\Base;
use Illuminate\Database\Eloquent\Factories\Factory;

class BaseFactory extends Factory
{
    protected $model = Base::class;
    public function definition(): array
    {
        return [
            'vname' => $this->faker->name(),
            'active_id' => '1',
        ];
    }
}
