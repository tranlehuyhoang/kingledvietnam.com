<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 15; $i++) {
            Category::create([
                'name' => 'ĐÈN LED TUÝP KINGLED',
                'banner' => 'category_banners/01JCF4DK9C4P7XWGZTR5VPE5Z0.png',
                'slug' => 'den-led-tuyp-kingled-' . $i,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'show_in_header' => 1,
                'description' => '<p><a href="https://kingledvietnam.com/den-led-tuyp-kingled/"><strong>Đèn Led tuýp Kingled</strong></a> là một trong những loại đèn Led phổ biến được sử dụng rộng rãi trong các công trình xây dựng như căn hộ, chung cư, phòng họp, bệnh viện và trường học,…</p>',
                'icon' => 'category_banners/01JCF5XNSV6JTHMEJY87NPHNPQ.png',
            ]);
        }
    }
}
