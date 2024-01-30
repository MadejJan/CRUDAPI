<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
           'firstname'=>$this->faker->firstname,
           'lastname'=>$this->faker->lastname,
           'age'=>$this->faker->biasedNumberBetween($min = 1, $max = 99, $function = 'sqrt'),
           'mobile'=>$this->faker->biasedNumberBetween($min = 500000000, $max = 899999999, $function = 'sqrt'),
           'city'=>$this->faker->city,
           'country'=>$this->faker->country,
        ];
    }
}
