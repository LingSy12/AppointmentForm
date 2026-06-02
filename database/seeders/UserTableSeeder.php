<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
                'id'=>'1',
                'name'=> 'Admin',
                'email'=> 'admin@example.com',
                'email_verified_at'=> null,
                // bcrypt hash of "password" — change this in your own deployment
                'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role'=> 1,
                'remember_token'=> null,
            ]
            ];
    
            foreach($user as $key=> $value){
                User::create($value);
            }
    }
}
