<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'article_title' => 'Sambut Momen Gratis PPN, Purinusa Jayakusuma Rilis Hunian Baru di Jakbar',
                'article_created_by' => 'Muhdany Yusuf Laksono',
                'article_body' => 'Komisaris Aryana Karawaci Mariana, Direktur Utama Aryana Karawaci Herman, Direktur Utama Purinusa Kembangan Christine Rai Santoso, Direktur Utama Aryana Siana, dan Chief Marketing Officer Purinusa Kembangan Andre Utama (kiri-kanan) bersama-sama melepas balon sebagai tanda pembukaan kawasan hunian baru Purinusa Kembangan di Jakarta, yang dikembangkan PT Purinusa Jayakusuma, Selasa (28/11/2023).',
                'article_thumbnail' => 'article-1.png',
                'article_banner' => 'article-2.png',
                'article_main_image' => 'article-1.png',
                'article_link' => 'https://www.kompas.com/properti/read/2023/11/29/143000221/sambut-momen-gratis-ppn-purinusa-jayakusuma-rilis-hunian-baru-di-jakbar?page=all',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'article_title' => 'Purinusa Kembangan Ditargetkan Soldout Diawal Tahun 2024',
                'article_created_by' => 'Darmawan',
                'article_body' => 'Komisaris Aryana Karawaci Mariana, Direktur Utama Aryana Karawaci Herman, Direktur Utama Purinusa Kembangan Christine Rai Santoso, Direktur Utama Aryana Siana, dan Chief Marketing Officer Purinusa Kembangan Andre Utama (kiri-kanan) bersama-sama melepas balon sebagai tanda pembukaan kawasan hunian baru Purinusa Kembangan di Jakarta, yang dikembangkan PT Purinusa Jayakusuma, Selasa (28/11/2023).',
                'article_thumbnail' => 'article-2.png',
                'article_banner' => 'article-2.png',
                'article_main_image' => 'article-2.png',
                'article_link' => 'https://tangsel.inews.id/view/376162/purinusa-kembangan-ditargetkan-soldout-diawal-tahun-2024',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'article_title' => 'Sambut Momen Gratis PPN, Purinusa Jayakusuma Rilis Hunian Baru di Jakbar',
                'article_created_by' => 'Muhdany Yusuf Laksono',
                'article_body' => 'Komisaris Aryana Karawaci Mariana, Direktur Utama Aryana Karawaci Herman, Direktur Utama Purinusa Kembangan Christine Rai Santoso, Direktur Utama Aryana Siana, dan Chief Marketing Officer Purinusa Kembangan Andre Utama (kiri-kanan) bersama-sama melepas balon sebagai tanda pembukaan kawasan hunian baru Purinusa Kembangan di Jakarta, yang dikembangkan PT Purinusa Jayakusuma, Selasa (28/11/2023).',
                'article_thumbnail' => 'article-1.png',
                'article_banner' => 'article-2.png',
                'article_main_image' => 'article-1.png',
                'article_link' => 'https://www.kompas.com/properti/read/2023/11/29/143000221/sambut-momen-gratis-ppn-purinusa-jayakusuma-rilis-hunian-baru-di-jakbar?page=all',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ];

        Article::insert($data);
    }
}
