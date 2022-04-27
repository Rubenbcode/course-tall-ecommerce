<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends Component{

    use WithPagination;

    public $category,$subcategoryset,$brandset;

    public $view = 'grid';

    public function render(){
        //$products = $this->category->products()->where('status',2)->paginate(20);

        $products_query = Product::query()->whereHas('subcategory.category',function(Builder $query){
            $query->where('id',$this->category->id);
        });

        if($this->subcategoryset){
            $products_query = $products_query->whereHas('subcategory',function(Builder $query){
                $query->where('name',$this->subcategoryset);
            });
        }

        if($this->brandset){
            $products_query = $products_query->whereHas('brand',function(Builder $query){
                $query->where('name',$this->brandset);
            });
        }

        $products = $products_query->paginate(20);
        return view('livewire.category-filter',compact('products'));
    }

    public function clear(){
        $this->reset(['subcategoryset','brandset']);
    }
}
