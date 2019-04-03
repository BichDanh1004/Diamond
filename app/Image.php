<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table="images";
    protected $primaryKey="id_image";

    public function products(){
        return $this->belongsTo('App\Product','id_product','id_product');
    }
}
