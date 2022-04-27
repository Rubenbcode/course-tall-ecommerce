<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;
use App\Models\Brand;


class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'icon',
    ];

    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    public function products(){
        return $this->hasManyThrough(Product::class,Subcategory::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }


}
