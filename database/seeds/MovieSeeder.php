<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'genre_id' => 1,
                'title' => 'Itaewon Class',
                'photo' => 'https://upload.wikimedia.org/wikipedia/en/9/99/Itaewon_Class.jpg',
                'description' => 'The story of Park Sae Ro Yi who opens a restaurant in Itaewon.',
                'rating' => 5
            ],
            [
                'genre_id' => 2,
                'title' => 'Spongebob Squarepants',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNTk2NzEyNTQtZTQ5MS00MjAyLTgzMDMtNDNkYTBkM2M2OTU3XkEyXkFqcGdeQXVyODUwNjEzMzg@._V1_UX182_CR0,0,182,268_AL_.jpg',
                'description' => 'SpongeBob SquarePants is an American animated comedy television series created by marine science educator and animator Stephen Hillenburg',
                'rating' => 5
            ],
            [
                'genre_id' => 3,
                'title' => 'The Blacklist',
                'photo' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTXfHwGsSQvrjv6r5ccVQ_oZsj85b5ezGaTyuIdBpyFllhLk5Ga',
                'description' => 'The Blacklist is an American crime thriller television series that premiered on NBC on September 23, 2013.',
                'rating' => 4
            ]
        ]);
    }
}
