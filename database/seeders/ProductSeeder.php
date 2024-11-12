<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run()
    {
        for ($i = 25; $i <= 48; $i++) {
            Product::create([
                'name' => 'ĐÈN LED SPOTLIGHT 7W (DLR-7-T110)',
                'short_description' => 'ĐÈN LED SPOTLIGHT 7W (DLR-7-T110)',
                'slug' => 'den-led-spotlight-7w-dlr-7-t110-' . $i,
                'images' => ["products\/01JCFA16NW70YX5D3C38P4Q0R3.png","products\/01JCFA16P42E8FGNSDJ7RDXM75.png","products\/01JCFA16PDJC6QKPDQWZ17F1A1.png","products\/01JCFA16PMAKKDQDKA1575FHNQ.png"],
                'description' => '<ul><li><h2>1. Sử dụng chip Led Sam Sung:</h2></li><li>Đèn led kingled Sử dụng chip led sam sung SMD 2835 thế hệ S3 mới nhất cho ánh sáng đẹp, trung thực và tiết kiệm điện năng hơp các thế hệ chip cũ</li><li><h2>2. Độ hoàn màu CRI cao &gt;90</h2></li><li>Đèn Kingled có độ hoàn màu hay còn gọi là độ trung thực màu CRI&gt;90 cho màu sắc vật thể được chiếu sáng chân thực, sống động</li><li><h2>3. Thiết kế tràn viền, ánh sáng tỏa đều:</h2></li><li>Đèn led tuýp Bán nguyệt Kingled được thiết kế tràn viền cho góc chiếu rộng 180 độ, cho ánh sáng tỏa đều và êm dịu, chống chói lóa</li></ul><p><br></p>',
                'price' => 1420166,
                'is_active' => 1,
                'is_featured' => 0,
                'in_stock' => 1,
                'on_sale' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'subcategory_id' => null,
                'status' => '',
                'category_id' => 46,
                'discount_price' => 1416307,
                'info' => '<p><strong>Mã SP&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : TBN-36SS-120</strong></p><p><strong>Công suất&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 36W</strong></p><p><strong>Nguồn điện&nbsp; &nbsp; &nbsp; &nbsp; : 220V/ 50Hz</strong></p><p><strong>Ánh sáng&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Trắng/ Trung tính/ Vàng</strong></p><p><strong>Nhiệt độ màu&nbsp; &nbsp; &nbsp; : 6500K/ 4000K/ 3000K</strong></p><p><strong>Kích thước&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 120x5x3 cm</strong></p><p><strong>Chip LED&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: SAMSUNG 2835</strong></p><p><br></p>',
                'info_bonus' => '<p><strong>Màu Ánh Sáng</strong> | Trắng, Vàng, Trung tính</p>',
                'code' => 'DLR-7-T110'
            ]);
        }
    }
}
