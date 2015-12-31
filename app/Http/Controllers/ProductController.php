<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('allproduct',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Product::findOrFail($id);
        $company=$produk->company;
        return view('addToCart',compact('produk','company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
    * Add to cart item that user choose
    * Move the hook to cart Database
    *@param int $id
    */

    public function addToCart($id){
      $produk=Product::findOrFail($id);
      Auth::loginUsingId(1);
      $user = Auth::user()->id;
      $addToCart = Cart::create(['product_id'=>$produk->id,
                                'user_id'=>$user]);
      return 'Berhasil Memasukan data ke cart list';
    }


    /*
    * A Function to retrieve all Cart that the logged in user have
    */

    public function myCart(){
        Auth::loginUsingId(1);
        // $currentUser = Auth::user();
        // $cartList = $currentUser->cartProductId();
        $currUserId = Auth::user()->id;
        $cartList = Cart::cartList($currUserId)->get();
        return view ('myCart',compact('cartList'));
        // return view('myCart',compact('cartList'));
    }

    /**
    * Finalize the booked by user
    * Change status from pending to booked
    * @param int $id
    */

    public function finalizeBooked($id){
        Cart::finalizeCart($id);
        return 'cart finalized';
    }
}
