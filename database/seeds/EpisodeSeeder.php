<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            [
                'movie_id' => 1,
                'episode' => 1,
                'title' => 'IC 1'
            ],
            [
                'movie_id' => 1,
                'episode' => 2,
                'title' => 'IC 2'
            ],
            [
                'movie_id' => 2,
                'episode' => 1,
                'title' => 'SS 1'
            ],
            [
                'movie_id' => 2,
                'episode' => 2,
                'title' => 'SS 2'
            ],
            [
                'movie_id' => 3,
                'episode' => 1,
                'title' => 'TB 1'
            ],
            [
                'movie_id' => 3,
                'episode' => 2,
                'title' => 'TB 2'
            ]
        ]);
    }
}
