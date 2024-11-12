<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\ProductResource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{
   
    protected static ?string $heading = 'Sản phẩm Mới Nhất'; // Tiêu đề tiếng Việt
    protected int | string | array  $columnSpan = 'full';
    protected static ?int $sort = 2;
    public function table(Table $table): Table
    {
        return $table
            ->query(ProductResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID') // Đổi nhãn sang tiếng Việt
                    ->searchable(),
                Tables\Columns\ImageColumn::make('images')
                    ->label('Ảnh') // Đổi nhãn sang tiếng Việt
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên Sản Phẩm') // Đổi nhãn sang tiếng Việt
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Danh Mục') // Đổi nhãn sang tiếng Việt
                    ->sortable(),



               
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug') // Đổi nhãn sang tiếng Việt
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày Tạo') // Đổi nhãn sang tiếng Việt
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Ngày Cập Nhật') // Đổi nhãn sang tiếng Việt
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Danh Mục') // Đổi nhãn sang tiếng Việt
                    ->relationship('category', 'name')
                    ->preload(),

            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()
                        ->label('Xem'), // Đổi nhãn sang tiếng Việt
                    Tables\Actions\EditAction::make()
                        ->label('Chỉnh Sửa'), // Đổi nhãn sang tiếng Việt
                    Tables\Actions\DeleteAction::make()
                        ->label('Xóa'), // Đổi nhãn sang tiếng Việt
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Xóa Nhiều'), // Đổi nhãn sang tiếng Việt
                ]),
            ]);
    }
}
