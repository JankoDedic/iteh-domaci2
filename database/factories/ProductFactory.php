<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'manufacturer' => Collection::make([
                'Samsung',
                'Apple',
                'Dell',
                'Xiaomi',
                'Toshiba',
                'Huawei',
                'Google',
                'HP',
                'Microsoft',
                'Lenovo',
            ])->random(),

            'name' => Collection::make([
                'smartphone',
                'tablet',
                'laptop',
                'PC',
                'monitor',
                'keyboard',
                'mouse',
                'TV',
                'headphones',
                'earphones',
                'power adapter',
            ])->random(),

            'price' => rand(300, 1200),
        ];
    }
}
