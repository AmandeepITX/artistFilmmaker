<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = [
            ['title' => 'rock'],
            ['title' => 'rap & hip hop'],
            ['title' => 'soul'],
            ['title' => 'r & b'],
            ['title' => 'pop'],
            ['title' => 'country'],
            ['title' => 'latin'],
        ];
        Genre::insert($genre);
    }
}
