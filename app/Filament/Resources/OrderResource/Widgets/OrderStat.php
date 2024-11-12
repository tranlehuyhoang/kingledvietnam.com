<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Số Lượng Sản Phẩm', Product::query()->count()), // Đếm số lượng sản phẩm
            Stat::make('Số Lượng Danh Mục', Category::query()->count()), // Đếm số lượng danh mục
            Stat::make('Số Lượng Danh Mục Con', Subcategory::query()->count()), // Đếm số lượng danh mục con
            Stat::make('Số Lượng Bài Viết', Blog::query()->count()), // Đếm số lượng bài viết
        ];
    }
}
