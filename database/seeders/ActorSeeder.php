<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $actors = [
            [
            'id' => 1,
            'name' => 'Ben Affleck',
            ],
            [
                'id' => 2,
                'name' => 'Brad Pitt',
            ],
            [
                'id' => 3,
                'name' => 'Shia Labeouf',
            ],
            [
                'id' => 4,
                'name' => 'Margot Robbie',
            ],
            [
                'id' => 5,
                'name' => 'Julia Roberts',
            ],
            [
                'id' => 6,
                'name' => 'Angelina Jolie',
            ]
            ]; 
        foreach($actors as $key => $value) {
            Actor::create($value);
        }
    }
}
