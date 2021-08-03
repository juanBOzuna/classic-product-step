<?php

namespace Database\Factories;

use App\Models\Productos;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Productos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomNumber(),
            'url_image'=>'https://www.parquelacolina.com/wp-content/uploads/2018/11/WOM-LOGO.png'
        ];
    }


}
