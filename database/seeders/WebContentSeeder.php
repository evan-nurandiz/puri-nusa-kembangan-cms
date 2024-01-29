<?php

namespace Database\Seeders;

use App\Models\WebContent;
use Illuminate\Database\Seeder;

class WebContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $concept = [
            "concept_small_title" => "KONSEP PERUMAHAN",
            "concept_title" => "Perumahan Modern & Premium",
            "concept_description" => "Perumahan dengan luas 6000 m2 dan memiliki 49 unit di Kembangan, Jakarta Barat.",
            "concept_usp_1_description" => "Design Modern & Minimalis",
            "concept_usp_2_description" => "Lokasi Strategis",
            "concept_usp_3_description" => "Lokasi Strategis",
            "concept_small_image" => "house-concept-2.png",
            "concept_big_image" => "house-concept-1.png",
            "concept_description_1_icon" => "icon-1.svg",
            "concept_description_1_count" => "3",
            "concept_description_1_description" => "LANTAI",
            "concept_description_2_icon" => "icon-1.svg",
            "concept_description_2_count" => "1",
            "concept_description_2_description" => "CARPORT",
            "concept_description_3_icon" => "icon-1.svg",
            "concept_description_3_count" => "4",
            "concept_description_3_description" => "KAMAR TIDUR",
            "concept_description_4_icon" => "icon-1.svg",
            "concept_description_4_count" => "4",
            "concept_description_4_description" => "KAMAR MANDI"
        ];

        $benefit = [
            "benefit_small_title" => "KEUNGGULAN UTAMA",
            "benefit_title" => "Fitur Utama Purinusa Kembangan",
            "benefit_description" => "Man braid hell of edison bulb four brunch subway
            tile authentic, chillwave put a bird on it church-key 
            try-hard ramps heirloom.",
            "benefit_vidio_youtube_url" => "https://www.youtube.com/watch?v=Get7rqXYrbQ",
            "benefit_total_unit" => "49",
            "benefit_total_area" => "6000",
            "benefit_1_icon" => "benefit_1.svg",
            "benefit_1_title" => "Smart Living",
            "benefit_1_description" => "When nothing prevents our being able to we like best, every pleasure to be welcomed & every.",
            "benefit_2_icon" => "benefit_2.svg",
            "benefit_2_title" => "Eco Construction",
            "benefit_2_description" => "When nothing prevents our being able to we like best, every pleasure to be welcomed & every.",
            "benefit_3_icon" => "benefit_3.svg",
            "benefit_3_title" => "Attractive Location",
            "benefit_3_description" => "when nothing prevents our being able to we like best, every pleasure to be welcomed & every.",
            "benefit_4_icon" => "benefit_3.svg",
            "benefit_4_title" => "Modern Technology",
            "benefit_4_description" => "When nothing prevents our being able to we like best, every pleasure to be welcomed & every.",
        ];

        $houseType = [
            'house_type_small_title' => "2 PILIHAN TIPE RUMAH",
            'house_type_big_title' => "Pilih Rumah-mu",
            'house_types_list' => array(
                array(
                    'house_type' => "Tipe 2 Lantai",
                    'house_type_description' => "There are many type of variations pass not available",
                    'house_type_image' => 'house-display-1.png',
                    'house_link' => "https://api.whatsapp.com/send?phone=62818830153&text=Hi, saya tertarik dengan Purinusa Kembangan. Bisa minta info lebih lanjut?"
                ),
                array(
                    'house_type' => "Tipe 3 Lantai",
                    'house_type_description' => "There are many type of variations pass not available",
                    'house_type_image' => 'house-display-1.png',
                    'house_link' => "https://api.whatsapp.com/send?phone=62818830153&text=Hi, saya tertarik dengan Purinusa Kembangan. Bisa minta info lebih lanjut?"
                )
            )
        ];

        $houseLayout = [
            'house_layout_small_title' => 'LAYOUT RUMAH',
            'house_layout_big_title' => 'Layout Rumah',
            'house_layout_description' => 'Layout yang kami rancangkan dengan se-efisien mungkin sesuai kebutuhan kalian dari 2 lantai hingga juga 3 lantai.',
            'house_layout_list' => array(
                array(
                    'house_area_total' => '60/110 m2',
                    'house_floor' => '2',
                    'house_status' => 'Development',
                    'house_bedroom' => '3',
                    'house_bathroom' => '3',
                    'house_carport' => '1',
                    'house_layout_image' => 'home-layout.png',
                    'house_link_url' => '/'
                ),
                array(
                    'house_area_total' => '60/140 m2',
                    'house_floor' => '3',
                    'house_status' => 'Development',
                    'house_bedroom' => '4',
                    'house_bathroom' => '4',
                    'house_carport' => '1',
                    'house_layout_image' => 'home-layout-2.png',
                    'house_link_url' => '/'
                )
            )
        ];

        $general = [
            'contact_number' => '0818830153',
            'working_hour' => 'Mon - Sun: 8AM - 8PM',
            'instagram_link' => 'https://www.instagram.com/purinusakembangan/',
            'facebook_link' => null,
            'twitter_link' => null,
            'tiktok_pixel_script' => "<script>\r\n!function (w, d, t) {\r\n  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=[\"page\",\"track\",\"identify\",\"instances\",\"debug\",\"on\",\"off\",\"once\",\"ready\",\"alias\",\"group\",\"enableCookie\",\"disableCookie\"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i=\"https://analytics.tiktok.com/i18n/pixel/events.js\";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement(\"script\");o.type=\"text/javascript\",o.async=!0,o.src=i+\"?sdkid=\"+e+\"&lib=\"+t;var a=document.getElementsByTagName(\"script\")[0];a.parentNode.insertBefore(o,a)};\r\n\r\n  ttq.load('CMIDVG3C77UFIL1RAC1G');\r\n  ttq.page();\r\n}(window, document, 'ttq');\r\n</script>",
            "meta_pixel_script" => null,
            "google_tag_script" => null,
            "custom_header_script" => null
        ];

        $gallery = [
            'gallery_list' => array('highlight-1.png', 'highlight-2.png')
        ];

        $award = [
            'award_list' => array(
                array(
                    'award_description' => 'Indonesian Property Award 2023 Best Affordable Housing Development',
                    'award_image' => 'thropy-list-1.svg'
                ),
                array(
                    'award_description' => '16th Annual Indonesia Property & Bank Award',
                    'award_image' => 'thropy-list-2.svg'
                )
            )
        ];

        $aroundHouse = [
            'shopping_list' => array('Mal Puri Indah', 'Lippo Mall Puri', 'Plaza Senayan', 'Pondok Indah Mall', 'Ikea Alam Sutera', 'Swalayan Superindo', 'Lotte Grosir', 'Ranch Market'),
            'school_list' => array('Universitas Binus', 'Universitas Multimedia Nusantara', 'Universitas Mercu Buana', 'Universitas Esa Unggul', 'Sekolah International IPEKA', 'SMP Notre Dame', 'SD Penabur', 'TK Stela Maris'),
            'hospital_list' => array('Rumah Sakit Siloam', 'Rumah Sakit Mandaya', 'Rumah Sakit Pondok Indah Puri'),
            'express_way_list' => array('Pintu Tol Meruya', 'Pintu Tol Joglo'),
            'around_house_image' => 'map-1.png'
        ];

        $data = [
            [
                'section' => 'concept',
                'content' => json_encode($concept)
            ],
            [
                'section' => 'benefit',
                'content' => json_encode($benefit)
            ],
            [
                'section' => 'houseType',
                'content' => json_encode($houseType)
            ],
            [
                'section' => 'general',
                'content' => json_encode($general)
            ],
            [
                'section' => 'houseLayout',
                'content' => json_encode($houseLayout)
            ],
            [
                'section' => 'gallery',
                'content' => json_encode($gallery)
            ],
            [
                'section' => 'award',
                'content' => json_encode($award)
            ],
            [
                'section' => 'aroundHouse',
                'content' => json_encode($aroundHouse)
            ]
        ];

        WebContent::insert($data);
    }
}
