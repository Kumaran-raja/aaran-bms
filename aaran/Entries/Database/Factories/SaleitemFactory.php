<?php

namespace Aaran\Entries\Database\Factories;

use Aaran\Common\Models\Common;
use Aaran\Entries\Models\Sale;
use Aaran\Entries\Models\Saleitem;
use Aaran\Master\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleitemFactory extends Factory
{
    protected $model = Saleitem::class;

    public function definition(): array
    {
        $product = Product::pluck('id')->random();
        $colour = Common::where('label_id', '=', '7')->pluck('id')->random();
        $size = Common::where('label_id', '=', '8')->pluck('id')->random();

        return [
            'sale_id' => Sale::factory(),
            'po_no' => $this->faker->numberBetween(1, 1000),
            'dc_no' => $this->faker->numberBetween(1, 1000),
            'no_of_roll' => $this->faker->numberBetween(1, 1000),
            'product_id' => $product,
            'description' => $this->faker->text(25),
            'colour_id' => $colour,
            'size_id' => $size,
            'qty' => $this->faker->numberBetween(1, 1000),
            'price' => $this->faker->numberBetween(1, 500),
            'gst_percent' => '5',

        ];
    }
}
