<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'question' => 'berapa jumlah kaki kucing ?',
                'option_a' => '2',
                'option_b' => '3',
                'option_c' => '4',
                'option_d' => '1',
                'answer_key' => 'c',
            ],

            [
                'question' => ' 1+1 = ...',
                'option_a' => '2',
                'option_b' => '3',
                'option_c' => '4',
                'option_d' => '11',
                'answer_key' => 'a',
            ],

            [
                'question' => 'surabaya terletak di provinsi?',
                'option_a' => 'jawa tengah',
                'option_b' => 'jawa barat',
                'option_c' => 'jawa timur',
                'option_d' => 'jakarta',
                'answer_key' => 'c',
            ],

            [
                'question' => 'yang termasuk hewan herbivora?',
                'option_a' => 'ayam',
                'option_b' => 'singa',
                'option_c' => 'ikan',
                'option_d' => 'kambing',
                'answer_key' => 'd',
            ],

            [
                'question' => 'yang bukan termasuk hewan omnivora?',
                'option_a' => 'monyet',
                'option_b' => 'tikus',
                'option_c' => 'burung',
                'option_d' => 'kambing',
                'answer_key' => 'd',
            ],

            

            [
                'question' => 'yang bukan termasuk hewan karnivora?',
                'option_a' => 'singa',
                'option_b' => 'tikus',
                'option_c' => 'serigala',
                'option_d' => 'harimau',
                'answer_key' => 'b',
            ],


            [
                'question' => 'XVII adalah bilangan romawi dari .. ',
                'option_a' => '17',
                'option_b' => '20',
                'option_c' => '16',
                'option_d' => '18',
                'answer_key' => 'a',
            ],

            [
                'question' => 'siapa presiden RI pertama ?',
                'option_a' => 'IR. SOEKARNO',
                'option_b' => 'MOCH. YAMIN',
                'option_c' => 'SOEHARTO',
                'option_d' => 'JOKOWI',
                'answer_key' => 'a',
            ],

            [
                'question' => 'siapa presiden RI sekarang ?',
                'option_a' => 'IR. SOEKARNO',
                'option_b' => 'MOCH. YAMIN',
                'option_c' => 'SOEHARTO',
                'option_d' => 'JOKOWI',
                'answer_key' => 'd',
            ],

            [
                'question' => 'Taman Laut Raja Ampat terdapat di Provinsi ...',
                'option_a' => 'Sulawesi Selatan',
                'option_b' => 'Papua Barat',
                'option_c' => 'Slawesi Utara',
                'option_d' => 'Bali',
                'answer_key' => 'b',
            ],

            [
                'question' => 'indonesia berada di zona waktu bagian?',
                'option_a' => 'WIB',
                'option_b' => 'WIT',
                'option_c' => 'WITA',
                'option_d' => 'Utara',
                'answer_key' => 'a',
            ],

            [
                'question' => 'apa warna bulu angsa?',
                'option_a' => 'hitam',
                'option_b' => 'biru',
                'option_c' => 'putih',
                'option_d' => 'hijau',
                'answer_key' => 'c',
            ],

            [
                'question' => 'hewan yang bertelur disebut juga',
                'option_a' => 'ovipar',
                'option_b' => 'vivipar',
                'option_c' => 'ovovivipar',
                'option_d' => 'mamalia',
                'answer_key' => 'a'
            ],

            [
                'question' => 'ada berapa warna pelangi?',
                'option_a' => '8',
                'option_b' => '9',
                'option_c' => '7',
                'option_d' => '6',
                'answer_key' => 'c',
            ],

            [
                'question' => 'berapa jumlah kaki kuda?',
                'option_a' => '2',
                'option_b' => '3',
                'option_c' => '4',
                'option_d' => '5',
                'answer_key' => 'c',
            ],

            [
                'question' => 'Burung langka yang berbulu putih dan berjambul adalah ...',
                'option_a' => 'jalak bali',
                'option_b' => 'burung cendrawasih',
                'option_c' => 'kakak tua',
                'option_d' => 'betet',
                'answer_key' => 'a',
            ],

            [
                'question' => 'Suaka Margasatwa Ujung Kulon melindungi hewan langka yaitu ...',
                'option_a' => 'harimau',
                'option_b' => 'badak bercula satu',
                'option_c' => 'kuda nil',
                'option_d' => 'gajah',
                'answer_key' => 'b',
            ],

            [
                'question' => 'apa warna daun?',
                'option_a' => 'merah',
                'option_b' => 'kuning',
                'option_c' => 'hijau',
                'option_d' => 'biru',
                'answer_key' => 'c',
            ],

            [
                'question' => 'warna yang melambangkan kesucian adalah?',
                'option_a' => 'jingga',
                'option_b' => 'hitam',
                'option_c' => 'hijau',
                'option_d' => 'putih',
                'answer_key' => 'd', 
            ],

            [
                'question' => 'warna yang melambangkan keberanian adalah?',
                'option_a' => 'merah', 
                'option_b' => 'hijau',
                'option_c' => 'hitam',
                'option_d' => 'putih',
                'answer_key' => 'a',
            ],
            
        ]);
    }
}
