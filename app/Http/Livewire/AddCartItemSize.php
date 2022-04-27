<?php

namespace App\Http\Livewire;

use App\Models\Size;
use Livewire\Component;

class AddCartItemSize extends Component{

    public $quantity =0;
    public $qty = 1;
    public $product;
    public $sizes;
    public $size_id = "";
    public $colors = [];
    public $color_id = "";

    public function mount(){
        $this->sizes = $this->product->sizes;
    }

    public function render(){
        return view('livewire.add-cart-item-size');
    }

    public function updatedSizeId($value){
        $size = Size::find($value);
        $this->colors = $size->colors;
    }

    public function updatedColorId($value){
        $size = Size::find($this->size_id);
        $this->quantity = $size->colors->find($value)->pivot->quantity;
    }

    public function increment(){
        $this->qty++;
    }
    public function decrement(){
        $this->qty--;
    }
}
