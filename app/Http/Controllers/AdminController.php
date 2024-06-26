<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Item;
use App\Models\File;


use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function addproducts(Request $request){
    // dd(1);
    $products=new Product;
    $products->items=$request->products;
    $products->save();
    $code="200";


    return Response()->json([
     "code" => $code
 ]);
   }
public function additemshh(Request $request){
    // dd($request->all());
    $item=new Item;
    $item->products=$request->products;
    $item->brand=$request->brand;
    $item->product_name=$request->product_name;
    $item->product_desc=$request->product_desc;
    $item->price=$request->price;
    $item->color=$request->color;
    $item->save();
}
public function showproducts(){
    $products =Product::all();
   // return collect($products);
    return view('essense/pages/admin/additems',compact('products'));

}

public function showonshop(){
    $products =Product::all();
    $items =Item::all();
    $brands=Item::selectRaw('brand')->distinct()->get();

    return view('shop',compact('products','items','brands'));

}

public function additems(Request $request){
        $savepath="";
        $request->validate([
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5000',
        ]);
        $item =new Item;

        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $imageName = $imagePath->getClientOriginalName();
            // $path = $request->file('image')->storeAs('img', $imageName);
            $path=$imagePath->move(public_path('/img'), $imageName);

        }
        $item->products=$request->products;
        $item->brand=$request->brand;
        $item->product_name=$request->product_name;
        $item->product_desc=$request->product_desc;
        $item->price=$request->price;
        $item->color=$request->color;
        $savepath=str_replace("/var/www/html/laravel_projects/ESSENCE/public","","$path");
        $item->image = $savepath;
        $item->save();
        $statuscode="200";
        $msg="added status successfully";
        return response()->json(["status"=>$statuscode,"msg"=>$msg]);


}

}
