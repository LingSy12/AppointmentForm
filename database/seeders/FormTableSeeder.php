<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Form;

class FormTableSeeder extends Seeder
{
    public function run()
    {
        $form =[
        [
            'user_id'=>'1',
            'slot'=> '13',
            'day'=> '2024-01-10',
            'class1'=> 'Fitness class',
            'class2'=> null,
            'class'=> null,
            'comments'=> 'hahahah',
        ],

        [
            'user_id'=>'1',
            'slot'=> '15',
            'day'=> '2024-01-14',
            'class1'=> null,
            'class2'=> 'Nutrition class',
            'class'=> null,
            'comments'=> 'lol',
        ]
        ];

        foreach($form as $key=> $value){
            Form::create($value);
        }
    }
}