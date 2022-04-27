<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class AddCartItem extends Component
{

    public $qty = 1;
    public $quantity;

    public $product;

    public function mount(){
        $this->quantity = $this->product->quantity;
    }
    public function render(){
        return view('livewire.add-cart-item');
    }

    public function decrement(){
        $this->qty--;
    }

    public function increment(){
        $this->qty++;
    }

    public function addToCart(){
        Cart::add(['id' => $this->product->id,
            'name' => $this->product->name,
            'qty' => $this->qty,
            'price' => $this->product->price,
            'weight' => 550,
        ]);
    }
    
} 
