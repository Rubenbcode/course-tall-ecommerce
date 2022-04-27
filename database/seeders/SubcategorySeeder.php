<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder{

    public function run(){
        $subcategories =[
            [
                'category_id' =>1,
                'name' => 'Celulares y smartphones',
                'slug' => Str::slug('Celulares y smartphones'),
                'color' => true
            ],
            [
                'category_id' =>1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),
            ],
            [
                'category_id' =>1,
                'name' => 'SmartWatchs',
                'slug' => Str::slug('SmartWatchs'),
            ],

            [
                'category_id' =>2,
                'name' => 'Tv y Audio',
                'slug' => Str::slug('Tv y Audio'),
            ],
            [
                'category_id' =>2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
            ],
            [
                'category_id' =>2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos'),
            ],


            [
                'category_id' =>3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
            ],
            [
                'category_id' =>3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
            ],
            [
                'category_id' =>3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],
            [
                'category_id' =>3,
                'name' => 'PC',
                'slug' => Str::slug('PC'),
            ],


            [
                'category_id' =>4,
                'name' => 'Portatil',
                'slug' => Str::slug('Portatil'),
            ],
            [
                'category_id' =>4,
                'name' => 'PC Escritorio',
                'slug' => Str::slug('PC Escritorio'),
            ],
            [
                'category_id' =>4,
                'name' => 'almacenamiento',
                'slug' => Str::slug('almacenamiento'),
            ],
            [
                'category_id' =>4,
                'name' => 'Accesorios Pc',
                'slug' => Str::slug('Accesorios Pc'),
            ],

            
            [
                'category_id' =>5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color' => true,
                'size' => true


            ],
            [
                'category_id' =>5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size' => true


            ],
            [
                'category_id' =>5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
            ],
            [
                'category_id' =>5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes'),
            ]
        ];

        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
