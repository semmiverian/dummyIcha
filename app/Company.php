<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=['nama','alamat'];

    public function product(){
      return $this->hasMany('App\Product');
    }
}
