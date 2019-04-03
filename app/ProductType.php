<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $table="product_types";
    protected $primaryKey= "id_product_type";

    public function products(){
        return $this->hasMany('App\Product','id_product_type','id_product_type');
    }
}
