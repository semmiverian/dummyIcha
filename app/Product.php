<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['lokasi','ukuran','fasilitas','jenis'];

    public function company(){
      return $this->belongsTo('App\Company');
    }
}
