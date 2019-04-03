<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use App\Product;
use App\Image;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        $image = Image::all();
        if(Session::has('cart')){
            $oldCart = Session('cart')?Session::get('cart'):null;
            $cart = new Cart($oldCart);
            $cart = Session::get('cart');
            $totalPrice = $cart->totalPrice;
            $sp = $cart->items;
        
    
            return view('customer.page.cart',['product'=>$sp,'img'=>$image,'totalPrice'=>$totalPrice]);
        }
        //
        return view('customer.page.cart',['product'=>$sp,'img'=>$image]);
    }
    public function Addcart(Request $req,$id)
    {
        //
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart    = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function deletecart($id)
    {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart    = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }

}
