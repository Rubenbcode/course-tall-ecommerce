<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;



class DatabaseSeeder extends Seeder{

    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Storage::deleteDirectory('/public/products');
        Storage::deleteDirectory('/public/categories');
        Storage::deleteDirectory('/public/subcategories');

        Storage::makeDirectory('/public/products');
        Storage::makeDirectory('/public/categories');
        Storage::makeDirectory('/public/subcategories');

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class); 
        $this->call(SizeSeeder::class); 
        $this->call(ColorSizeSeeder::class);


    }
}
