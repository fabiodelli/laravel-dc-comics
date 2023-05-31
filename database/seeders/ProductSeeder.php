<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('db.products');

        foreach ($products as $Product) {
            $newProduct = new Product();
            $newProduct->title = $Product['title'];
            $newProduct->description = $Product['description'];
            $newProduct->thumb = $Product['thumb'];
            $newProduct->price = $Product['price'];
            $newProduct->series = $Product['series'];
            $newProduct->sale_date = $Product['sale_date'];
            $newProduct->type = $Product['type'];
            $newProduct->save();
        }
    }
}