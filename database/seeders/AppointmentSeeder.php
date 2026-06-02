<?php

use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        Appointment::factory(50)->create();
    }
}