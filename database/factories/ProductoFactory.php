<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name(10),
            'description'   => $this->faker->text(10),
            'price'         => $this->faker->randomNumber(3),
            'image'         => $this->faker->text(5),
            'brand'         => $this->faker->text(8),
            'categorie'     => $this->faker->sentence,
            'etiqueta'      => $this->faker->text(6),
        ];
    }
}
