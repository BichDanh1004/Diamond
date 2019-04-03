<?php

use Illuminate\Database\Seeder;
use App\Bill;
class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bill::create([
            'total'->total,
            'id_customer'->id_customer,
            'id_employee'->id_employee,
            'address'->address,
            'date_order'->date_order
        ]);
    }
}
