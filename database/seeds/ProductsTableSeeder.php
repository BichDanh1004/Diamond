<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'product_name'->product_name,
            'price'->price,
            'description'->description,
            'sold_quantity'->sold_quantity,
            'new'->new,
            'id_product_type'->id_product_type,
         
        ]);
    }
}
