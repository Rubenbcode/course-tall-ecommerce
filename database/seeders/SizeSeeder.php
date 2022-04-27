<?php

namespace Database\Seeders;

use App\Models\Size;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;

class SizeSeeder extends Seeder{

    public function run(){
        $sizes = ['S','M','L'];
        $products = Product::whereHas('subcategory',function(Builder $query){
            $query->where('color',true)
            ->where('size',true);
        })->get();

        foreach($products as $product){
            foreach($sizes as $size){
                Size::factory(1)->create([
                    'product_id' => $product->id,
                    'name' => $size
                ]);
            }
        }
    }
}
