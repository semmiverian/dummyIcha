<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=['product_id','user_id'];

    public function customer(){
    	return $this->belongsTo('App\User');
    }

    public function product(){
    	return $this->belongsTo('App\Product');
    }

    /**
    * Query for retrieve all cart own by the logged in user
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */

    public function scopeCartList($query,$userId){
       return $query->join('users','carts.user_id','=','users.id')
                    ->join('products','carts.product_id','=','products.id')
                    ->select('users.name','products.nama','carts.status','carts.id')
                    ->where('carts.user_id',$userId);
    }

    /**
    * Finalize the booked by user from pending to Booked
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */

    public function scopeFinalizeCart($query,$id){
      return $query->where('id',$id)
                    ->update(['status' => 'booked']);
    }
}
