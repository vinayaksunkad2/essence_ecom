<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Product;
use App\Models\cart;
use App\Models\Wishlist;
use Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(){
        $items =Item::all();
        // dd($items);
        
        return view('home',compact('items'));
    }
    public function blog(){
        return view('blog');
    }
    public function checkout(){
        return view('checkout');
    }
    public function contact(){
        return view('contact');
    }
    // public function shop(){
    //     return view("shop",compact('brands'));
    // }
    public function wishlist(){

        return view("wishlist");
    }
    public function regular_page(){
        return view('regular-page');
    }
    public function single_product_details(){
        return view('single-product-details');
    }
    public function single_blog(){
        return view('single-blog');
    }
    public function register(){
        return view('Auth/register');
    }
    public function login(){
        return view('Auth/login');
    }
    public function files(){
        return view('files');
    }
    

    public function getdata(Request $request){
            $search=$request->search;
           $brand=$request->brand;
           $color=$request->color;
           $id=$request->ids;
           $sort=$request->sort;

           if($id=="all"){
               $items = Item::whereNotNull('id');
            }else{
                $items = Item::where('products',$id);
            }

            if($color != 'all'){
                $items = $items->where('color',$color);
            }
            
           
            if($brand != "All"){
                $items = Item::where('brand',$brand);
            }
            if($sort=="price:-high-low"){
                $items=$items->orderBy('price','desc');
            }else if($sort=="price:-low-high"){
                $items=$items->orderBy('price','asc');
            }else if($sort=="Newest"){
                $items=$items->orderBy('updated_at','desc');
            }
   
            $start_price=$request->start_price;
            $end_price=$request->end_price;
            if($start_price != 'default' ) {
                $items=$items->whereBetween('price',[$start_price, $end_price])->orderBy('price','asc');
            }
            if($search!= '' ) {
                $items = $items->where('product_desc', 'LIKE', '%'.$search.'%');
            }
            // dd($search);
            // $items = $items->get();
            $items=$items->paginate(6);
            
            $w_cnt = Wishlist::where('user_id',Auth::user()->id)->count();
            $wishlist_status = Wishlist::where('user_id',Auth::user()->id)->select('item_id')->get();
            
            return Response()->json([
                'data'=>$items,
                'count'=>count($items),
                'wishlist_cnt' =>count(Wishlist::where('user_id',Auth::user()->id)->get()),
                "wishlist_status"=>$wishlist_status
              ]);
            }
}
