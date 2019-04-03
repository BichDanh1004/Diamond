<?php

namespace App;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table="products";
    protected $primaryKey= "id_product";

    public function images(){
        return $this->hasMany('App\Image','id_product','id_product');
    }
    public function producttype(){
        return $this->belongsTo('App\ProductType','id_product_type','id_product_type');
    }

    public function carts(){
        return $this->belongsTomany('App\Cart','cart_detail','id_product','id_cart');
    }
      public function bills(){
        return $this->belongsToMany('App\Product','bill_details','id_bill','id_product')->withPivot('id_bill_detail','quantity','total');
    }
}
