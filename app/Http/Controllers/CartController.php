<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    public function cart(Request $request){
        $id=$request->ids;
        $quantity=$request->quantity;
        $size=$request->size;
        $userid=Auth::user()->id;
        if($request->i_diff == 1){
            $cart=Item::where('id',$id)->first();
            $cartlist=new Cart;
            $cartlist->user_id=Auth::user()->id;
            $cartlist->product_id=$cart['products'];
            $cartlist->item_id= $cart['id'];
            $cartlist->price=$cart['price']; 
            $cartlist->discount=$cart['discount']; 
            $cartlist->product_name=$cart['product_name']; 
            $cartlist->product_desc=$cart['product_desc']; 
            $cartlist->image=$cart['image'];
            $cartlist->color=$cart['color'];
            $cartlist->size=$size;  
            $cartlist->quantity=$quantity;
            $cartlist->save(); 
        }
        $cart=Cart::where('user_id',$userid)->get();
        $discount=Cart::where('user_id',$userid)->get('discount');
        $cartcount=Cart::where('user_id',$userid)->count();
        $c_sum=Cart::where('user_id',$userid)->selectRaw('sum(price) as A' )->get();
     
        return Response()->json([
            'cart'=>$cart,
            'discount'=>$discount,
            'count'=>$cartcount,
            't_sum' => $c_sum,
            'id'=> Auth::id(),
            
        ]);

    }
    public function removefromcart(Request $request){
        $cartid=$request->cartid;
        $userid=Auth::user()->id;
        $cart_rm=Cart::find($cartid)->delete();
        $discount=Cart::where('user_id',$userid)->get('discount');
        $cart_cnt=Cart::where('user_id',Auth::user()->id)->count();
        $c_sum=Cart::where('user_id',Auth::user()->id)->selectRaw('sum(price) as A' )->get();
        return Response()->json([
             'status' => 200,
             'count' => $cart_cnt,
             'discount'=>$discount,
             't_sum' => $c_sum
        ]);

        

    }
}