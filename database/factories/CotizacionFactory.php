<?php

namespace Database\Factories;

use App\Models\Cotizacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class CotizacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cotizacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          =>$this->faker->text(18),
            'firtsName'     =>$this->faker->text(20),
            'cantProduct'   =>$this->faker->randomNumber(3),
            'company'       =>$this->faker->text(10),
            // 'notCompany'  =>$this->faker->boolean(),
            'phone'         =>$this->faker->randomNumber(9),
            'city'          =>$this->faker->text(10),
            'postalCode'    =>$this->faker->randomNumber(5),
            'comments'      =>$this->faker->text(30),
            'total'         =>$this->faker->randomNumber(4),
        ];
    }
}