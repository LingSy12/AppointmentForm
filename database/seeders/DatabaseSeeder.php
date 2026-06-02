<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Form;
use App\Models\Appointment;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // If want to insert data by using Seeder
        // $this->call(UserTableSeeder::class);
        // $this->call(FormTableSeeder::class);

        User::factory(100)->create();
        Form::factory(100)->create();
        Appointment::factory(50)->create();

    }
}