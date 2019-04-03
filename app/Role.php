<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table="roles";
    protected $primaryKey= "id_role";
    public function users(){
    return $this->hasOne('App\User','id_user','id_role');
     }
}
