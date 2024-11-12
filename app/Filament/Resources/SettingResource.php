<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Tabs;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog'; // Thay đổi biểu tượng

    protected static ?string $navigationGroup = 'Cài Đặt'; // Thêm nhóm điều hướng

    protected static string $title = 'Quản Lý Cài Đặt'; // Thêm tiêu đề

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Cài đặt') // Đổi tên tab
                    ->tabs([
                        Tabs\Tab::make('Thông Tin')
    ->icon('heroicon-o-information-circle')
    ->schema([
        // Section: Thông Tin Liên Hệ
        Forms\Components\Section::make('Thông Tin Liên Hệ')
            ->schema([
                Forms\Components\TextInput::make('address')
                    ->maxLength(255)
                    ->default(null)
                    ->label('Địa chỉ'),

                Forms\Components\TextInput::make('hotline')
                    ->maxLength(255)
                    ->default(null)
                    ->label('Hotline'),
                Forms\Components\TextInput::make('hotline2')
                    ->maxLength(255)
                    ->default(null)
                    ->label('Hotline 2'),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->default(null)
                    ->label('Email'),

                Forms\Components\TextInput::make('website')
                    ->maxLength(255)
                    ->default(null)
                    ->label('Website'),

                Forms\Components\TextInput::make('copyright')
                    ->maxLength(255)
                    ->default(null)
                    ->label('Copyright'),
            ]),

        // Section: Logo
        Forms\Components\Section::make('Logo')
            ->schema([
                Forms\Components\TextInput::make('web_name')
                    ->default(null)
                    ->label('Tên Website'),
                Forms\Components\FileUpload::make('logo')
                    ->default(null)
                    ->label('Logo'),

                Forms\Components\FileUpload::make('logo_light')
                    ->default(null)
                    ->label('Logo Ánh Sáng'),
            ]),

        // Section: Thông Tin Ngân Hàng
        Forms\Components\Section::make('Thông Tin Ngân Hàng')
            ->schema([
                Forms\Components\TextInput::make('so_tai_khoan')
                    ->maxLength(255)
                    ->default(null)
                    ->label('Số Tài Khoản'),

                Forms\Components\TextInput::make('ngan_hang')
                    ->maxLength(255)
                    ->default(null)
                    ->label('Ngân Hàng'),
            ]),

        // Section: Mạng Xã Hội
        Forms\Components\Section::make('Mạng Xã Hội')
            ->schema([
                Forms\Components\FileUpload::make('web_icon')
                    ->label('Icon Web')
                    ->placeholder('Upload  icon'),
           
                Forms\Components\FileUpload::make('banner_web')
                    ->label('Banner Web')
                    ->placeholder('Upload Banner Web'),
                Forms\Components\Textarea::make('description_web')
                    ->label('Mô tả Web')
                    ->placeholder('Nhập mô tả Web'),
            ]),

        // Section: Mô Tả Công Ty
        Forms\Components\Section::make('Mô Tả Công Ty')
            ->schema([
                Forms\Components\Textarea::make('company_description')
                    ->label('Mô tả công ty')
                    ->placeholder('Nhập mô tả về công ty')
                    ->rows(5), // Số hàng hiển thị
            ]),
    ]),

                        Tabs\Tab::make('Hướng dẫn')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                Forms\Components\RichEditor::make('purchase_guide')
                                    ->columnSpanFull()
                                    ->label('Hướng dẫn mua hàng'),
                            ]),

                        Tabs\Tab::make('Thanh toán')
                            ->icon('heroicon-o-credit-card')
                            ->schema([
                                Forms\Components\RichEditor::make('payment_guide')
                                    ->columnSpanFull()
                                    ->label('Hướng dẫn thanh toán'),
                            ]),

                        Tabs\Tab::make('Liên hệ')
                            ->icon('heroicon-o-truck')
                            ->schema([
                                Forms\Components\RichEditor::make('shipping_policy')
                                    ->columnSpanFull()
                                    ->label('Liên hệ'),
                            ]),

                        Tabs\Tab::make('Bảo hành')
                            ->icon('heroicon-o-shield-check')
                            ->schema([
                                Forms\Components\RichEditor::make('warranty_policy')
                                    ->columnSpanFull()
                                    ->label('Chính sách bảo hành'),
                            ]),

                        Tabs\Tab::make('Dịch vụ')
                            ->icon('heroicon-o-lock-closed')
                            ->schema([
                                Forms\Components\RichEditor::make('privacy_policy')
                                    ->columnSpanFull()
                                    ->label('Điều khoản dịch vụ'),
                            ]),

                        Tabs\Tab::make('Đổi trả')
                            ->icon('heroicon-o-check-circle')
                            ->schema([
                                Forms\Components\RichEditor::make('return_policy')
                                    ->columnSpanFull()
                                    ->label('Chính sách đổi trả hàng và hoàn tiền'),
                            ]),

                        Tabs\Tab::make('Giới Thiệu')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                Forms\Components\RichEditor::make('introduction')
                                    ->columnSpanFull()
                                    ->label('Giới thiệu'),

                     
                            ]),
                        Tabs\Tab::make('Báo Giá')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                Forms\Components\RichEditor::make('baogia')
                                    ->columnSpanFull()
                                    ->label('Báo Giá'),

                     
                            ]),

                      
                    ])
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Ngày cập nhật'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
