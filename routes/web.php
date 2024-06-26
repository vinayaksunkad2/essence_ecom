<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::group(['middleware'=>"auth"],function(){
    route::get('files',[ViewController::class,'files']);
    route::get('/home',[ViewController::class,'home']);
    route::get('/blog',[ViewController::class,'blog']);
    route::get('/shop1',[ViewController::class,'shop']);
    route::get('/wishlist',[ViewController::class,'wishlist']);
    route::post('/getdata',[ViewController::class,'getdata'])->name('getprddetails');
    
    Route::get('/checkout',[ViewController::class,'checkout']);
    Route::get('/contact',[ViewController::class,'contact']);
    Route::get('/regular-page',[ViewController::class,'regular_page']);
    
    Route::get('/single-product-details', [ViewController::class,'single_product_details']);
    Route::get('/single-blog',[ViewController::class,'single_blog']);
    route::get('addproducts',function(){
        return view("essense.pages.admin.addproducts");
    });
    route::get('/additems',[AdminController::class,'showproducts']);
    route::get('/shop',[AdminController::class,'showonshop']);
    route::post('/addproducts',[AdminController::class,'addproducts']);
    route::post('/additems',[AdminController::class,'additems']);
    route::post('/wishlist',[WishlistController::class,'wishlist']);
    route::post('/cart',[CartController::class,'cart']);
    route::post('/wishlistpage',[WishlistController::class,'wishlistpage']);
    route::post('/cartremove',[CartController::class,'removefromcart']);
    route::post('/placeorder',[CheckoutController::class,'placeorder']);
    route::post('/orderdetails',[CheckoutController::class,'orderdetails']);

    
});

Route::get('/register_',[SignupController::class,'register_']);
Route::get('/login_',[SignupController::class,'login_'])->name('login');
Route::get('/logout',[SignupController::class,'logout'])->name('logout');

//ajax
// Route::get('/register_',[ViewController::class,'register_']);    
// Route::get('/login_',[ViewController::class,'login_']);

// Route::get('/essence-login', function () {
//     return view('login');
// });

route::post('/register_',[SignupController::class,'signup_']);
route::post('/logined',[SignupController::class,'logined']);


// route::any('/shop',[LoginController::class,'login']);

// route::post('/additems123',[AdminController::class,'showproducts']);
    // route::post('/addimg',[AdminController::class,'fileUpload']);
    // route::get('/getitems',[ViewController::class,'showItems']);
    // route::get('/e',function(){
    //     return view('evening');
    // });





// route::get('additems',function(){
//     //return view("essense.pages.admin.additems");
// });

route::get("/get-name",[TestController::class,'getfirstlastname']);