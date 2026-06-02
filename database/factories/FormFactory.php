<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form>
 */
class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> $this->faker->numberBetween(1,10),
            'slot'=>'9am-11am',
            'day'=> $this->faker->date(),
            'class1'=>'Fitness class',
            'class2'=>null,
            'class3'=>null,
            'comments'=> $this->faker->sentence(),
        ];
    }
}
