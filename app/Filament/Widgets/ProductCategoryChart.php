<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Category;

class ProductCategoryChart extends ChartWidget
{
    protected static ?string $heading = 'Số lượng sản phẩm theo danh mục';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        // Lấy danh sách các danh mục và đếm số lượng sản phẩm trong mỗi danh mục
        $categories = Category::withCount('products')->get();

        return [
            'labels' => $categories->pluck('name')->toArray(),  // Tên danh mục
            'datasets' => [
                [
                    'label' => 'Số lượng sản phẩm',
                    'data' => $categories->pluck('products_count')->toArray(), // Số lượng sản phẩm theo từng danh mục
                    'backgroundColor' => 'rgba(75, 192, 192, 0.5)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Loại biểu đồ
    }
}
