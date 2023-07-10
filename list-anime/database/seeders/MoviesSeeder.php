<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movies::create([
            'title' => 'Attack on Titan',
            'poster' => 'https://m.media-amazon.com/images/I/81dH7-pkjiL.jpg',
            'genres_id' => 1,
            'synopsis' => 'Di dunia yang dikuasai oleh raksasa mengerikan, umat manusia bertahan di balik tembok yang tinggi. Eren Yeager, seorang pemuda yang haus akan balas dendam, bersama dengan teman-temannya, bergabung dengan Pasukan Penyelidik untuk melawan ancaman raksasa dan mengungkap misteri di balik keberadaan mereka.',
            'release_date' => '2013-04-07',
            'countries_id' => 1,
            'rating' => '9.0'
        ]);

        Movies::create([
            'title' => 'One Piece',
            'poster' => 'https://m.media-amazon.com/images/I/51EYLAVxIpL._AC_UF894,1000_QL80_.jpg',
            'genres_id' => 2,
            'synopsis' => 'Monkey D. Luffy, seorang bajak laut muda dengan tubuh yang bisa meregang seperti karet, memimpin kru bajak lautnya yang bersemangat dalam mencari harta karun legendaris bernama One Piece. Mereka bertualang melintasi lautan yang luas, berhadapan dengan bajak laut jahat, dan berusaha untuk menjadi Raja Bajak Laut.',
            'release_date' => '1999-10-20',
            'countries_id' => 1,
            'rating' => '8.7'
        ]);

        Movies::create([
            'title' => 'Death Note',
            'poster' => 'https://m.media-amazon.com/images/I/51ryvnDxMoL._AC_UF894,1000_QL80_.jpg',
            'genres_id' => 4,
            'synopsis' => 'Saat menemukan buku misterius yang dikenal sebagai Death Note, seorang siswa cerdas bernama Light Yagami memutuskan untuk menggunakan kekuatan mengerikan buku itu untuk memberantas kejahatan dunia. Namun, perburuannya dengan detektif jenius yang dikenal sebagai L menjadi permainan pikiran yang rumit dan penuh teka-teki.',
            'release_date' => '2006-10-04',
            'countries_id' => 1,
            'rating' => '8.6'
        ]);

        Movies::create([
            'title' => 'Naruto',
            'poster' => 'https://m.media-amazon.com/images/I/71q2-E9zLPL.jpg',
            'genres_id' => 1,
            'synopsis' => 'Di desa Konoha yang penuh semangat, Naruto Uzumaki, seorang ninja muda yang penuh tekad, berusaha untuk menjadi Hokage, pemimpin desa yang paling dihormati. Dia harus menghadapi tantangan, melampaui batas-batasnya, dan melindungi teman-teman serta desanya dari ancaman jahat yang mengintai.',
            'release_date' => '2002-10-03',
            'countries_id' => 1,
            'rating' => '8.3'
        ]);

        Movies::create([
            'title' => 'Fullmetal Alchemist: Brotherhood',
            'poster' => 'https://m.media-amazon.com/images/I/71YYVENqPaL.jpg',
            'genres_id' => 3,
            'synopsis' => 'Dalam upaya untuk mengembalikan tubuh mereka yang hilang, dua bersaudara bernama Edward dan Alphonse Elric menjalani perjalanan di dunia yang penuh dengan ilmu alkimia. Mereka mencari Batu Bertuah, artefak legendaris yang diyakini bisa mengubah takdir, sambil mengungkap konspirasi yang luas dan misteri gelap.',
            'release_date' => '2009-04-05',
            'countries_id' => 1,
            'rating' => '9.1'
        ]);

        Movies::create([
            'title' => 'My Hero Academia',
            'poster' => 'https://m.media-amazon.com/images/I/81oVodKdY6L.jpg',
            'genres_id' => 1,
            'synopsis' => 'Di dunia di mana hampir semua orang memiliki kekuatan super yang disebut "Quirk," seorang remaja bernama Izuku Midoriya bermimpi untuk menjadi pahlawan super. Namun, dia terlahir tanpa kekuatan dan harus mengatasi rintangan yang luar biasa untuk memenuhi impian dan menghadapi ancaman yang datang.',
            'release_date' => '2016-04-03',
            'countries_id' => 1,
            'rating' => '8.5'
        ]);

        Movies::create([
            'title' => 'Steins;Gate',
            'poster' => 'https://m.media-amazon.com/images/I/815mzv3EKtL.jpg',
            'genres_id' => 4,
            'synopsis' => 'Rintarou Okabe, seorang mahasiswa eksentrik, menemukan cara untuk melakukan perjalanan waktu dengan menggunakan mikrowave termodifikasi. Namun, eksperimen ini memicu serangkaian peristiwa yang tak terduga, memaksa Rintarou dan teman-temannya berjuang melawan kekuatan rahasia yang ingin mengendalikan waktu itu sendiri.',
            'release_date' => '2011-04-06',
            'countries_id' => 1,
            'rating' => '9.1'
        ]);

        Movies::create([
            'title' => 'Hunter x Hunter',
            'poster' => 'https://m.media-amazon.com/images/I/71CirqcvjKL.jpg',
            'genres_id' => 2,
            'synopsis' => 'Gon Freecss, seorang anak laki-laki yang bersemangat, memulai perjalanan untuk menjadi Hunter, individu yang berkeliling dunia untuk menemukan harta karun, mengalahkan makhluk yang kuat, dan menemukan ayahnya yang hilang. Namun, di balik ujian-ujian yang sulit, ia menemukan bahwa menjadi Hunter bukanlah perjalanan yang mudah.',
            'release_date' => '2011-10-02',
            'countries_id' => 1,
            'rating' => '9.1'
        ]);

        Movies::create([
            'title' => 'Sword Art Online',
            'poster' => 'https://m.media-amazon.com/images/I/51T+Kw2MtwL._AC_UF894,1000_QL80_.jpg',
            'genres_id' => 3,
            'synopsis' => 'Pada tahun 2022, pemain terjebak dalam dunia virtual reality game yang sangat populer, Sword Art Online. Kirito, salah satu pemain yang terjebak, harus berjuang melalui tingkat-tingkat yang berbahaya untuk mencapai kebebasan. Namun, jika mereka mati di dalam game, mereka juga akan mati di dunia nyata.',
            'release_date' => '2012-07-07',
            'countries_id' => 1,
            'rating' => '7.6'
        ]);

        Movies::create([
            'title' => 'Demon Slayer: Kimetsu no Yaiba',
            'poster' => 'https://m.media-amazon.com/images/I/91Rwbfnm0PL.jpg',
            'genres_id' => 1,
            'synopsis' => 'Tanjiro Kamado, seorang anak laki-laki yang menjadi pemburu iblis setelah keluarganya dibantai oleh iblis, memulai perjalanannya untuk mencari obat yang dapat mengubah saudarinya, Nezuko, kembali menjadi manusia. Dalam perjalanannya, Tanjiro bergabung dengan Demon Slayer Corps dan bertarung melawan iblis sambil menemukan rahasia gelap dari iblis itu sendiri.',
            'release_date' => '2019-04-06',
            'countries_id' => 1,
            'rating' => '8.8'
        ]);
        Movies::create([
            'title' => 'Your Lie in April',
            'poster' => 'https://m.media-amazon.com/images/I/81cFd2NinLL.jpg',
            'genres_id' => 3,
            'synopsis' => 'Kōsei Arima, seorang pianis jenius yang kehilangan kemampuan untuk mendengar nada setelah kehilangan ibunya, bertemu dengan Kaori Miyazono, seorang pemain biola yang energik. Mereka membantu satu sama lain dalam menghadapi masa lalu dan menginspirasi dalam mengejar musik.',
            'release_date' => '2014-10-10',
            'countries_id' => 1,
            'rating' => '8.8'
        ]);

        Movies::create([
            'title' => 'Cowboy Bebop',
            'poster' => 'https://m.media-amazon.com/images/I/81kTVUwMJpL.jpg',
            'genres_id' => 1,
            'synopsis' => 'Di masa depan yang jauh, sekelompok pemburu bayaran antariksa yang eklektik dan eksentrik berpetualang melalui galaksi dalam pesawat luar angkasa mereka, Bebop. Mereka mengejar buronan dan menghadapi masa lalu yang kelam di tengah aksi dan musik jazz yang ikonik.',
            'release_date' => '1998-04-03',
            'countries_id' => 1,
            'rating' => '8.9'
        ]);

        Movies::create([
            'title' => 'Haikyuu!!',
            'poster' => 'https://m.media-amazon.com/images/I/81VZ+Ce34eL.jpg',
            'genres_id' => 2,
            'synopsis' => 'Shōyō Hinata, seorang pemain voli yang penuh semangat, berusaha untuk menjadi yang terbaik meski tinggi badannya yang pendek. Dia bergabung dengan tim voli SMA Karasuno dan bersaing di turnamen tingkat nasional sambil mengembangkan kemampuan dan menghadapi lawan-lawan tangguh.',
            'release_date' => '2014-04-06',
            'countries_id' => 1,
            'rating' => '8.7'
        ]);

        Movies::create([
            'title' => 'One Punch Man',
            'poster' => 'https://m.media-amazon.com/images/I/71oeGc311SL.jpg',
            'genres_id' => 1,
            'synopsis' => 'Saitama, seorang pahlawan yang kuat, namun bosan karena bisa mengalahkan musuh dengan satu pukulan saja. Dia mencari kegembiraan dalam perjalanan mencari lawan yang bisa memberinya tantangan yang sebenarnya dalam pertarungan.',
            'release_date' => '2015-10-04',
            'countries_id' => 1,
            'rating' => '8.7'
        ]);

        Movies::create([
            'title' => 'Code Geass: Lelouch of the Rebellion',
            'poster' => 'https://m.media-amazon.com/images/I/91rK2B0qsZS.jpg',
            'genres_id' => 3,
            'synopsis' => 'Di dunia yang dikuasai oleh Kekaisaran Britannia, seorang siswa bernama Lelouch Lamperouge mendapatkan kekuatan misterius yang dikenal sebagai Geass. Dengan tujuan menggulingkan kekuasaan Britannia, ia memulai pemberontakan yang rumit dan terlibat dalam konflik politik dan pertempuran yang intens.',
            'release_date' => '2006-10-05',
            'countries_id' => 1,
            'rating' => '8.9'
        ]);

        Movies::create([
            'title' => 'Kimetsu no Yaiba Movie: Mugen Train',
            'poster' => 'https://m.media-amazon.com/images/I/81ywJT+vlVL.jpg',
            'genres_id' => 1,
            'synopsis' => 'Sebagai kelanjutan dari seri Demon Slayer: Kimetsu no Yaiba, film ini mengisahkan petualangan Tanjiro Kamado, Nezuko, dan teman-teman mereka saat mereka naik kereta Mugen untuk menghadapi iblis kuat. Mereka berjuang melawan musuh yang tak terduga sambil mengungkap misteri di balik kereta tersebut.',
            'release_date' => '2020-10-16',
            'countries_id' => 1,
            'rating' => '9.2'
        ]);

        Movies::create([
            'title' => 'Assassination Classroom',
            'poster' => 'https://m.media-amazon.com/images/I/81QZcKknQHL.jpg',
            'genres_id' => 2,
            'synopsis' => 'Sebuah kelas unik yang dipimpin oleh Koro-sensei, seorang makhluk buas yang telah menghancurkan bulan dan mengancam untuk menghancurkan bumi, ditugaskan untuk membunuhnya sebelum lulus. Siswa-siswa harus melatih keterampilan pembunuhan mereka sambil menghadapi tantangan emosional dan moral.',
            'release_date' => '2015-01-10',
            'countries_id' => 1,
            'rating' => '8.3'
        ]);

        Movies::create([
            'title' => 'Dragon Ball Z',
            'poster' => 'https://m.media-amazon.com/images/I/810juzDPc1L.jpg',
            'genres_id' => 1,
            'synopsis' => 'Setelah pertempuran melawan musuh kuat di Dragon Ball, Goku, pahlawan aksi yang kuat, berjuang melawan musuh-musuh baru yang lebih kuat dan melindungi bumi dari ancaman. Dia harus melatih dirinya sendiri, berkelahi dengan semangat, dan mempersiapkan diri untuk pertempuran yang tak terelakkan.',
            'release_date' => '1989-04-26',
            'countries_id' => 1,
            'rating' => '8.5'
        ]);

        Movies::create([
            'title' => 'Violet Evergarden',
            'poster' => 'https://m.media-amazon.com/images/I/81ZqjsKmtNL.jpg',
            'genres_id' => 3,
            'synopsis' => 'Setelah perang besar, Violet Evergarden, seorang mantan tentara yang tumbuh dalam kekerasan, mencoba untuk menemukan arti cinta dan emosi manusia. Dia bekerja sebagai "Auto Memory Doll" yang menulis surat atas nama orang lain sambil mencari pemahaman diri dan mengatasi trauma masa lalunya.',
            'release_date' => '2018-01-11',
            'countries_id' => 1,
            'rating' => '8.8'
        ]);

        Movies::create([
            'title' => 'The Promised Neverland',
            'poster' => 'https://m.media-amazon.com/images/I/71HCh5-sXiS.jpg',
            'genres_id' => 4,
            'synopsis' => 'Emma, Norman, dan Ray adalah tahanan yang hidup di panti asuhan Grace FieldHouse, yang tampaknya merupakan rumah idaman dengan pengasuh yang penuh cinta. Namun, mereka segera menemukan kebenaran mengerikan bahwa mereka ditumbuhkan sebagai makanan untuk iblis. Mereka harus melarikan diri dan mengungkap rahasia gelap di balik tempat tinggal mereka sambil berjuang untuk bertahan hidup.',
            'release_date' => '2019-01-09',
            'countries_id' => 1,
            'rating' => '8.7'
        ]);
    }
}
