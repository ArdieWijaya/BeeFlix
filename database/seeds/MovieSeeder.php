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
            ],
            ['genre_id'=>1,
                'title' => '100 Days My Prince',
                'photo' => 'https://upload.wikimedia.org/wikipedia/id/f/f0/100_Days_My_Prince.jpg',
                'description' => '100 Days My Prince adalah seri televisi Korea Selatan tahun 2018 yang dibintangi oleh Do Kyung-soo dan Nam Ji Hyun.',
                'rating' => 4
            ],
            ['genre_id'=>1,
                'title' => 'Startup',
                'photo' => 'https://cinemags.co.id/?attachment_id=159160',
                'description' => 'Drakor ini bercerita tentang awal kisah kehidupan Seo Dal Mi (Bae Suzy) dan Won In Jae(Kang Han Na) di dunia bisnis.',
                'rating' => 4
            ],
            ['genre_id'=>1,
                'title' => 'Cek Toko Sebelah',
                'photo' => 'https://upload.wikimedia.org/wikipedia/id/2/20/Cek_Toko_Sebelah.jpg',
                'description' => 'Ide cerita film ini dibuat berdasarkan pada realitas etnis Tionghoa saat anak beranjak dewasa, kuliah yang tinggi, mirisnya ujung-ujungnya bekerja di toko orang tuanya sendiri.',
                'rating' => 5
            ],
            ['genre_id'=>1,
                'title' => 'Nanti Kita Cerita Tentang Hari Ini',
                'photo' => 'https://miro.medium.com/max/2000/1*zWhS6AjqpkZpi_U5W8KlJw.jpeg',
                'description' => 'Setiap keluarga punya rahasia. Angkasa, Aurora dan Awan adalah kakak beradik yang hidup dalam keluarga yang tampak bahagia.',
                'rating' => 4
            ],
            ['genre_id'=>1,
                'title' => 'Joker',
                'photo' => 'https://images-na.ssl-images-amazon.com/images/I/71H4EDEfcwL._AC_SL1500_.jpg',
                'description' => 'Joker adalah film cerita seru psikologis Amerika Serikat tahun 2019 yang disutradarai oleh Todd Phillips dan diproduseri oleh Todd Philips, Bradley Cooper, dan Emma Tillinger Koskoff. ',
                'rating' => 5
            ],
            ['genre_id'=>1,
                'title' => 'Snowden',
                'photo' => 'https://upload.wikimedia.org/wikipedia/en/c/ca/Snowden_film_poster.jpg',
                'description' => 'Snowden adalah film thriller biografi politik Amerika Serikat tahun 2016 yang disutradarai Oliver Stone dan diproduseri oleh Moritz Borman, Eric Kopeloff, Philip Schulz-Deyle dan Fernando Sulichin.',
                'rating' => 4
            ],
            ['genre_id'=>1,
                'title' => 'Dunkirk',
                'photo' => 'https://images-na.ssl-images-amazon.com/images/I/81uvpYyduiL._AC_SL1500_.jpg',
                'description' => 'Dunkirk adalah film drama perang sejarah tahun 2017 yang disutradarai oleh Christopher Nolan dan diproduseri oleh Emma Thomas dan Christopher Nolan.',
                'rating' => 4
            ],
            ['genre_id'=>1,
                'title' => 'A Star is Born',
                'photo' => 'https://upload.wikimedia.org/wikipedia/id/9/90/AStarIsBornBradleyCooperPoster2018.jpg',
                'description' => 'Seorang bintang musik country yang karirnya mulai memudar, Jackson Maine (Bradley Cooper) menemukan sebuah talenta yang sangat berbakat di dalam diri dari seorang musisi muda bernama Ally (Lady Gaga).',
                'rating' => '4'
            ],
            ['genre_id'=>1,
                'title' => 'Ocean`s Eight',
                'photo' => 'https://assets-a1.kompasiana.com/items/album/2018/11/18/kaskuscoid-5bf1576a12ae945ea25d4512.jpeg',
                'description' => 'Terinspirasi oleh saudara lelakinya, Danny Ocean, Debbie Ocean mencoba melakukan pencurian terbesar abad ini di acara Met Gala yang bertabur bintang di New York City.',
                'rating' => 4
            ],
            ['genre_id' => 2,
                'title' => 'Pets United',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNmU2YTEwODktZDFlNC00YWJmLTk0NjEtMzZjMjM4Y2E3NjdiXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_.jpg',
                'description' => 'Pets United adalah film animasi Jerman-Cina-Inggris 2019 yang disutradarai dan ditulis oleh Reinhard Klooss dan dibintangi oleh Natalie Dormer, Eddie Marsan, dan Jeff Burrell.',
                'rating' => 4
            ],
            ['genre_id' => 2,
                'title' => 'Abominable',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTYzY2U0NjctNDJkNS00MmE3LWFiZGQtZjllZTIzYTQ4ODJkXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg',
                'description' => 'Yi (Chloe Bennet) tidak pernah menduga bahwa ia akan bertemu dengan Yeti di atap gedung apartemennya di Shanghai. Bersama teman-temannya, Jin (Tenzing Norgay Trainor) dan Peng (Albert Tsai), mereka menamakan Yeti muda ini Everest.',
                'rating' => 4
            ],
            ['genre_id' => 2,
                'title' => 'Dolittle',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMDNkODA5ZGQtODczOS00OTQxLThhMTItMjk0ZmNhMDM0YjNmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg',
                'description' => 'Setelah kehilangan istri tercinta, Dr. John Dolittle (Robert Downey Jr.) yang eksentrik mengasingkan dirinya di balik rumahnya dan hanya ditemani hewan-hewan peliharaannya yang eksotis.',
                'rating' => 4
            ],
            ['genre_id' => 2,
                'title' => 'Wreck-it-Ralph 2',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTYyNzEyNDAzOV5BMl5BanBnXkFtZTgwNTk3NDczNjM@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
                'description' => 'Petualangan Baru Ralph dan Vanellope akan berlanjut dalam Ralph Breaks the Internet. 6 tahun pasca Wreck-It Ralph, Ralph dan Vanellope kini semakin jauh menjelajah ke dunia maya.',
                'rating' => 4
            ],
            ['genre_id' => 2,
                'title' => 'Aladdin',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjQ2ODIyMjY4MF5BMl5BanBnXkFtZTgwNzY4ODI2NzM@._V1_.jpg',
                'description' => 'Aladdin, seorang anak jalanan yang jatuh cinta pada seorang putri. Dengan perbedaan kasta dan harta, Aladdin pun berusaha mencari jalan agar bisa mejadi seorang pangeran, tak disangka ia menemukan lampu dengan jin di dalamnya.',
                'rating' => 4
            ],
            ['genre_id' => 2,
                'title' => 'Cinderella',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjMxODYyODEzN15BMl5BanBnXkFtZTgwMDk4OTU0MzE@._V1_.jpg',
                'description' => 'Cinderella adalah film fantasi romantis Britania Raya yang disutradarai oleh Kenneth Branagh, dengan skenario ditulis oleh Chris Weitz.',
                'rating' => 4
            ],
            ['genre_id' => 2,
                'title' => 'Trolls',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTkxNDc3OTcxMV5BMl5BanBnXkFtZTgwODk2NjAzOTE@._V1_.jpg',
                'description' => 'Trolls adalah film animasi 3D Amerika Serikat tahun 2016 yang disutradarai oleh Mike Mitchell dan diproduseri oleh Gina Shay.',
                'rating' => 4
            ],
            ['genre_id' => 2,
                'title' => 'Sing',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTYzODYzODU2Ml5BMl5BanBnXkFtZTgwNTc1MTA2NzE@._V1_.jpg',
                'description' => 'Sing adalah film komedi musikal juke-box komputer-animasi Amerika 2016 yang diproduksi oleh Illumination Entertainment.',
                'rating' => 4
            ],
            ['genre_id' => 2,
                'title' => 'Zootopia',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BOTMyMjEyNzIzMV5BMl5BanBnXkFtZTgwNzIyNjU0NzE@._V1_.jpg',
                'description' => 'Zootopia adalah film animasi 3D Amerika Serikat tahun 2016 yang disutradarai oleh Byron Howard dan Rich Moore serta diproduseri oleh Clark Spencer.',
                'rating' => 4
            ],
            ['genre_id' => 3,
                'title' => '13 Reasons Why',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMDYzZTRlNGEtZDc2Mi00ZGNjLTlmZDAtMmVjMDZkOThiODEwXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg',
                'description' => '13 Reasons Why adalah serial drama misteri WebTV Amerika Serikat yang berdasarkan pada novel tahun 2007 Thirteen Reasons Why oleh Jay Asher dan diadaptasi oleh Brian Yorkey untuk Netflix.',
                'rating' => 4
            ],
            ['genre_id' => 3,
                'title' => 'We Bare Bears',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BYjQzOTA4N2YtYTlkMS00OTJlLWJiYTEtMDcxNWQ1NTNhYzYxXkEyXkFqcGdeQXVyNjM2NDIwMzQ@._V1_.jpg',
                'description' => 'Acara ini ditayangkan perdana di Cartoon Network dan mengikuti kisah tiga beruang bersaudara, Grizzly, Panda, dan Ice Bear, dan usaha canggung mereka untuk mengintegrasikan diri dengan dunia manusia di Wilayah Teluk San Francisco.',
                'rating' => 4
            ],
            ['genre_id' => 3,
                'title' => 'The Umbrella Academy',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNzA5MjkwYzMtNGY2MS00YWRjLThkNTktOTNmMzdlZjE3Y2IxXkEyXkFqcGdeQXVyMjkwMzMxODg@._V1_.jpg',
                'description' => 'The Umbrella Academy adalah serial televisi web superhero Amerika Serikat yang berdasarkan pada seri buku komik dengan nama yang sama yang diterbitkan oleh Dark Horse Comics.',
                'rating' => 3
            ],
            ['genre_id' => 3,
                'title' => 'Money Heist',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BZDcxOGI0MDYtNTc5NS00NDUzLWFkOTItNDIxZjI0OTllNTljXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
                'description' => 'Money Heist adalah serial drama televisi bertemakan kriminal dari Spanyol. Diproduseri oleh Álex Pina, seri ini awalnya dimaksudkan sebagai seri terbatas untuk diceritakan dalam dua bagian.',
                'rating' => 4
            ],
            ['genre_id' => 3,
                'title' => 'Flower of Evil',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMDNiOGQ4MjUtZmRiYS00MjQ5LTg4OGUtMDA0YjRmNGZiNTYzXkEyXkFqcGdeQXVyMTE2MTc3MzU1._V1_UY1200_CR108,0,630,1200_AL_.jpg',
                'description' => 'Flower of Evil adalah seri televisi Korea Selatan tahun 2020 yang dibintangi oleh Lee Joon-gi, Moon Chae-won, Jang Hee-jin, dan Seo Hyun-woo.',
                'rating' => 4
            ],
            ['genre_id' => 3,
                'title' => 'Hotel del Luna',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNzQ2MzQzNDktMTg4ZC00ZDE0LThhNmUtYWMxYmI3OTIzYzZlXkEyXkFqcGdeQXVyMzE4MDkyNTA@._V1_.jpg',
                'description' => 'Hotel del Luna adalah serial televisi Korea Selatan yang dibintangi oleh Lee Ji-eun dan Yeo Jin-goo. Drama ini disiarkan mulai tanggal 13 Juli hingga tanggal 1 September 2019 di tvN setiap hari Sabtu dan Minggu pukul 21.00 WSK.',
                'rating' => 4
            ],
            ['genre_id' => 3,
                'title' => 'The Witch',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BOGE4MmVjMDgtMzIzYy00NjEwLWJlODMtMDI1MGY2ZDlhMzE2XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg',
                'description' => 'Diterjemahkan dari bahasa Inggris-The Witcher adalah serial televisi streaming drama fantasi Polandia-Amerika yang diproduksi oleh Lauren Schmidt Hissrich. Ini didasarkan pada seri buku dengan nama yang sama oleh penulis Polandia Andrzej Sapkowski.',
                'rating' => 4
            ],
            ['genre_id' => 3,
                'title' => 'Stranger Things',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMjEzMDAxOTUyMV5BMl5BanBnXkFtZTgwNzAxMzYzOTE@._V1_UY1200_CR90,0,630,1200_AL_.jpg',
                'description' => 'Stranger Things adalah serial televisi web fiksi ilmiah, horor dari Amerika Serikat yang dibuat, ditulis, diarahkan, dan diproduksi oleh The Duffer Brothers, serta co-executive yang diproduksi oleh Shawn Levy dan Dan Cohen.',
                'rating' => 4
            ],
            ['genre_id' => 3,
                'title' => 'Memorist',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNWZjMzk1MDEtOTlmMy00ZGEzLTgzY2MtNzgyZjVhNGRlYWRlXkEyXkFqcGdeQXVyNDY5MjMyNTg@._V1_.jpg',
                'description' => 'Memorist adalah seri televisi Korea Selatan tahun 2020 yang dibintangi oleh Yoo Seung-ho, Lee Se-young, dan Jo Sung-ha. Seri ini berdasarkan webtoon Daum tahun 2016–2018 dengan nama yang sama karya Jae Hoo.',
                'rating' => 4
            ]
        ]);
    }
}
