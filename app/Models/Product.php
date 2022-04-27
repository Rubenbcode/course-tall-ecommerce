<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;
use App\Models\Color;
use App\Models\Brand;
use App\Models\Size;

class Product extends Model{

    use HasFactory;

    protected $fillable =[
        'id',
        'created_at',
        'updated_at'
    ];

    const BORRADOR = 1;
    const PUBLICADO = 2;

    public function category(){
        return $this->hasOneThrough(Category::class,Subcategory::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function colors(){
        return $this->belongsToMany(Color::class)->withPivot('quantity');
    }

    public function sizes(){
        return $this->hasMany(Size::class);
    }

    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }

    public function getRouteKeyName(){
        return 'slug';
    }


}
