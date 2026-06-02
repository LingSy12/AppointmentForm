<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'selected_person' => $this->faker->randomElement([
                'Fitness Trainer (Tay Hui Ling 81362)',
                'Nutritionist (Chong Jia Wei 79075)',
                'System Administrator (Yee siao yi 81537)',
                'Service System Administrator (Ling Sie Yek 79894)',
                'Founder (Christie Cham Yong Ern 79094)'
            ]),            
            'appointment_time' => $this->faker->time(),
            'appointment_date' => $this->faker->date(),
            'details' => $this->faker->paragraph,
        ];
    }
}