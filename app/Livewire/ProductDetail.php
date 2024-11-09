<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Mail\ReviewsProduct;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductDetail extends Component
{
    use LivewireAlert;
    public $rating = 0;
    public $email;
    public $phone;
    public $body;
  
    public function render()
    {
        return view('livewire.product-detail', [
        ]);
    }
    public function sendReview()
    {
        // You can validate the incoming data here

        // Prepare the data for the email
        $reviewData = [
            'product_name' => $this->product->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'body' => $this->body,
            'sku' => $this->sku,
            'rating' => $this->rating,
        ];

        // Send the email
        $settings = \App\Models\Setting::first();
        $recipientEmail = $settings->email; // Địa chỉ email nhận


        Mail::to($recipientEmail)->send(new ReviewsProduct([
            'reviewData' => $reviewData
        ]));
        // Optionally, you can add a success alert here
        $this->alert('success', 'Đánh giá của bạn đã được gửi!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
}

