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

    public $product; // Assuming you're passing the product to this component
    public $rating = 0;
    public $email;
    public $phone;
    public $body;
    public $relatedProducts = []; // Array to hold related products

    public function mount($slug)
    {
        // Load the product by slug
        $this->product = Product::where('slug', $slug)->firstOrFail();
    
        // Fetch 5 random products from the same category
        $this->relatedProducts = Product::where('category_id', $this->product->category_id)
            ->where('id', '!=', $this->product->id) // Exclude the current product
            ->inRandomOrder()
            ->limit(5)
            ->get();
    }

    public function render()
    {
        // dd($this->relatedProducts);
        return view('livewire.product-detail', [
            'relatedProducts' => $this->relatedProducts,
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
            'sku' => $this->product->sku, // Assuming your product has a SKU attribute
            'rating' => $this->rating,
        ];

        // Send the email
        $settings = \App\Models\Setting::first();
        $recipientEmail = $settings->email;

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