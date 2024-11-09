<?php

use App\Livewire\ProductDetail1;
use App\Livewire\Shop;
use App\Livewire\Thankyou;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Livewire\Cart;
use App\Livewire\Checkout;
use App\Livewire\ProductDetail;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\ShippingPolicy;
use App\Livewire\PrivacyPolicy;
use App\Livewire\PaymentPolicy;
use App\Livewire\WarrantyPolicy;
use App\Livewire\ReturnPolicy;
use App\Livewire\OrderTracking;
use App\Livewire\Blog;
use App\Livewire\Search;
use App\Livewire\BlogPost;
use App\Livewire\Account;
use App\Livewire\AccountOrders;
use App\Livewire\ChangePassword;
use App\Livewire\AccountAddresses;
use App\Livewire\AccountOrdersDetail;
use App\Livewire\BaoGia;
use App\Livewire\Category;
use App\Livewire\DieuKhoanDichVu;
use App\Livewire\HuongDanMuaHang;
use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\Register;
use App\Livewire\Subcategory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', Home::class);
Route::get('/gioi-thieu', About::class);
Route::get('/cua-hang', Shop::class);
Route::get('/cua-hang/{slug}', Category::class);
Route::get('/cua-hang/{slug}/{sub}', Subcategory::class);
Route::get('/san-pham/{slug}/', ProductDetail::class);

Route::get('/bao-gia', BaoGia::class);
Route::get('/lien-he', Contact::class);
Route::get('/tin-tuc', Blog::class);
Route::get('/tin-tuc/kingledvietnam-thong-bao-lich-nghi-tet-duong-2024/', BlogPost::class);


Route::get('/chinh-sach-van-chuyen', ShippingPolicy::class);

Route::get('/chinh-sach-bao-hanh', WarrantyPolicy::class);
Route::get('/chinh-sach-doi-tra-hang', ReturnPolicy::class);
Route::get('/dieu-khoan-dich-vu', DieuKhoanDichVu::class);
Route::get('/hinh-thuc-thanh-toan', PaymentPolicy::class);
Route::get('/huong-dan-mua-hang', HuongDanMuaHang::class);

Route::get('/tim-kiem', Search::class);