<?php

use Illuminate\Database\Seeder;
use App\CartDetail;

class CartDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CartDetail::create([
            'id_cart'->id_cart,
            'id_product'->id_product,
            'quantity'->quantity,
            'total'->total
        ]);
    }
}
