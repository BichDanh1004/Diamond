<?php

use Illuminate\Database\Seeder;
use App\BillDetail;

class BillDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BillDetail::create([
            'id_bill'->id_bill,
            'id_product'->id_product,
            'quantity'->quantity,
            'total'->total
        ]);
    }
}
