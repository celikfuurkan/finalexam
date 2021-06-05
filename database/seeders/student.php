<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class student extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        student::create([
            'name'=>'Furkan',
            'surname'=>'Çelik',
            'department'=>'Computer Engineer',
        ])
    }
}
