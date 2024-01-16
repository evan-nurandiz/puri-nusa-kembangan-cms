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
            "concept_title" => "Perumahan <br> Modern & Premium",
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
            "benefit_description" => "Man braid hell of edison bulb four brunch subway <br>
            tile authentic, chillwave put a bird on it church-key 
            try-hard ramps heirloom.",
            "benefit_vidio_youtube_url" => "https://www.youtube.com/watch?v=Get7rqXYrbQ",
            "benefit_total_unit" => "49+",
            "benefit_total_area" => "6000+",
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
                    'house_link' => "/house-1"
                ),
                array(
                    'house_type' => "Tipe 3 Lantai",
                    'house_type_description' => "There are many type of variations pass not available",
                    'house_type_image' => 'house-display-1.png',
                    'house_link' => "/house-2"
                )
            )
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
            ]
        ];

        WebContent::insert($data);
    }
}
