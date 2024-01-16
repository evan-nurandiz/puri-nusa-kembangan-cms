<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class BannerSeeder extends Seeder
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
                'title' => 'Your Next Level of Home',
                'thumbnail' => 'banner-1.png',
                'link' => null,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]
        ];

        Banner::insert($data);
    }
}
