<?php

use Illuminate\Database\Seeder;
use App\Image;
class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'id_product'->id_product,
            'img_path'->img_path
        
        ]);
    }
}
