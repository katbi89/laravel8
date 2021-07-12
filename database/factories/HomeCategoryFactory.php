<?php

namespace Database\Factories;

use App\Models\HomeCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HomeCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomeCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sel_categories = $this->faker->unique()->words($nb = 2, $asText = true);
        $no_of_products = $this->faker->numberBetween(1, 10);

        return [
            'sel_categories' => $sel_categories,
            'no_of_products' => $no_of_products,
        ];
    }
}
