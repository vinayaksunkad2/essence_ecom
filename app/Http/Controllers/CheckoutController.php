<?php

namespace App\Http\Controllers;
use App\Models\Checkout;
use Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function placeorder(Request $request){
        $data=$request->all();
        // dd($data);
        $placeorder=new Checkout;
        $placeorder->user_id=Auth::user()->id;
        $placeorder->firstname=$data['firstname'];
        $placeorder->lastname=$data['lastname'];
        $placeorder->country=$data['country'];
        $placeorder->address=$data['address'];
        $placeorder->postcode=$data['postcode'];
        $placeorder->city=$data['city'];
        $placeorder->phoneno=$data['phoneno'];
        $placeorder->email=$data['email'];
        $placeorder->save();
        $msg="Order Placed Successfully";
        return response()->json([
            'data'=>$msg
        ]);
        
    }
    public function orderdetails(Request $request){
        // dd($request->all());
        $subtotal=$request->subtotal;
        $totalamount=$request->totalamount;
        
        return view("checkout",compact('subtotal','totalamount'));
    }
}
