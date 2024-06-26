<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Wishlist;
use Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    // public function wishlist(Request $request){
    //     // dd($request->value);
    //     $value=$request->value;
    //     $id=$request->ids;
    //     $userid=Auth::user()->id;
    //     $wishlist=Item::where('id',$id)->update(['wishlist_status'=>$value]);
    //     $wishlist_status=Item::where('wishlist_status','1')->count();
    //     // dd($wishlist_status);
    //     return Response()->json([
    //         'wishlist_cnt'=>$wishlist_status
    //             ]);

    // }
    // public function wishlistpage(Request $request){
    //     // dd("1");
    //     $wishlist_status=Item::where('wishlist_status','1')->get();

    //     return Response()->json([
    //         'wishlist_count'=>count($wishlist_status),
    //         'wishlist'=>$wishlist_status
    //             ]);
    // }


    public function wishlist(Request $request){
        $value=$request->value;
        $id=$request->ids;
        $userid=Auth::user()->id;
        $data=Item::where('id',$id)->first();
        $wishlist=new Wishlist;
        $wishlist->user_id=$userid;
        $wishlist->product_id=$data['products'];
        $wishlist->item_id=$data['id'];
        $wishlist->price=$data['price'];
        $wishlist->color=$data['color'];
        $wishlist->product_name=$data['product_name'];
        $wishlist->product_desc=$data['product_desc'];
        $wishlist->image=$data['image'];
        $wishlist->save();
        $totalwishlist=Wishlist::selectRaw('item_id')->first();
        // dd($totalwishlist);

        if($value==0)
        {
            // dd(1);
            $remove=Wishlist::where('item_id',$id)->delete();
            // dd($remove);
        }
        $wishlist_cnt=Wishlist::where('user_id',$userid)->count();
        $wishlist_status=Wishlist::where('user_id',$userid)->get();
        
        return Response()->json([
        'wishlist_cnt'=>$wishlist_cnt,
        'wishlist'=>$wishlist_status

         ]);

    }
    public function wishlistpage(Request $request){
      $wishlist_status=Wishlist::where('user_id',Auth::user()->id)->get();
          return Response()->json([
            'wishlist_count'=>count($wishlist_status),
            'wishlist'=>$wishlist_status
                ]);

    }



}
