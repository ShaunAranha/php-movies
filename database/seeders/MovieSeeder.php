<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'id' => 1,
                'name' => 'Good Will Hunting',
            ],
            [
                'id' => 2,
                'name' => 'Fight Club',
            ],
            [
                'id' => 3,
                'name' => 'Transformers',
            ],
            [
                'id' => 4,
                'name' => 'Barbie',
            ],
            [
                'id' => 5,
                'name' => 'Eat Drink Pray Love',
            ],
            [
                'id' => 6,
                'name' => 'Gone Girl',
            ],
            [
                'id' => 7,
                'name' => 'The Big Short'
            ],
            [
                'id' => 8,
                'name' => 'Focus'
            ],
            [
                'id' => 9,
                'name' => 'Air',
            ],
            [
                'id' => 10,
                'name' => 'Troy',
            ],
            [
                'id' => 11,
                'name' => 'Honey Boy',
            ],
            [
                'id' => 12,
                'name' => 'Mr. and Mrs. Smith',
            ],
            [
                'id' => 13,
                'name' => 'Maleficent',
            ],
            [
                'id' => 14,
                'name' => 'The Wolf of Wall Street',
            ],
            [
                'id' => 15,
                'name' => 'Pretty Woman'
            ],
            [
                'id' => 16,
                'name' => 'Oceans Eleven'
            ]
        ];

        foreach ($movies as $key => $value) {
            Movie::create($value);
        }
    }
}
