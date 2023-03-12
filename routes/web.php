<?php
namespace App\Http\Controllers;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterClientController;
use App\Http\Controllers\DetailProductController ;
use App\Http\Controllers\FavouriteProductController ;
use App\Http\Controllers\SearchController ;


use Illuminate\Support\Facades\Route;




Route::get('/admin', [HomeController::class, 'index'])->name('admin');
Route::get('/', [LoginController::class, 'getlogin'])->name('formlogin');
Route::post('/login', [LoginController::class, 'login']);




Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => '/form'], function () {
        //Register for admin
        //Product
        //add
        Route::get('/', [ProductController::class, 'addproduct']);
        Route::post('/save', [ProductController::class, 'save'])->name('saveproduct');
        //update product
        Route::get('/products/showformupdate/{id}', [ProductController::class, 'formupdate']);
        Route::post('/products/update/{id}', [ProductController::class, 'update']);


        //list product
        //add
        Route::get('/addlistproduct', [ListProductController::class, 'addlp']);
        Route::post('/savelist', [ListProductController::class, 'savelist'])->name('savelist');
        //update
        Route::get('/listproducts/showformupdate/{id}', [ListProductController::class, 'formupdate']);
        Route::post('/listproducts/update/{id}', [ListProductController::class, 'update'])->name('updatelistproduct');
    });

   //---------------------------------------------------------------------------------------------------------------------------
   //admin

    Route::group(['prefix' => '/table'], function () {
        Route::get('/', [CustomerController::class, 'showdatacus']);

        Route::get('/order',[OrderController::class,'showdataorder']) ;
        Route::get('/orderdetail',[OrderController::class,'showdataorderdetail'])->name('orderdetail') ;

        Route::get('/products', [ProductController::class, 'showdatapro'])->name('tableproduct');
        // Route::get('/products/delete/{id}',[ProductController::class,'ProductController@delete']) ;
        // Route::get('/products/update/{id}',[ProductController::class,'ProductController@delete']) ;

        Route::get('/listproducts/delete/{id}', [ListProductController::class, 'delete']);
        Route::get('/products/delete/{id}', [ProductController::class, 'delete']);
    });
});

//---------------------------------------------------------------------------------------------------------------------------

Route::prefix('/client')->group(function () {
    Route::get('/home', [HomePageController::class, 'index'])->name('homeclient');
    //cart
    Route::get('/cart', [CartController::class,'cart'])->name('cart');
    Route::get('/addcart/{id}', 'App\Http\Controllers\CartController@addcart');
    Route::get('/deletecart/{id}',[CartController::class,'delete']) ;
    Route::post('/addinfocarttodb',[CartController::class,'addinfocart_db'])->name('cartdb') ;

    //favourite
    Route::get('/favourite',[FavouriteProductController::class,'heart'])->name('favouritecart') ;
    Route::get('/favouritecart/{id}',[FavouriteProductController::class,'addfavourite']) ;
    Route::get('/deletefavourite/{id}',[FavouriteProductController::class,'delete']) ;

    //Search
    Route::get('/search',[SearchController::class,'index']) ;

    //Single Product
    Route::get('/detail/{id}',[DetailProductController::class,'index'])->name('detailproduct') ;

    // Contactus
    Route::post('/contact', [CustomerController::class, 'addcustomer'])->name('addcus');

    //Login
    Route::get('/formlogin', [LoginController::class, 'getlogin'])->name('formlogin');
    Route::post('/login', [LoginController::class, 'login']);

    //Resetpassword
    Route::get('/resetpassword', [LoginController::class, 'resetpassword'])->name('resetpassword');
    Route::post('/saveresetpassword', [LoginController::class, 'saveresetpassword']);

    //Register
    Route::get('/register', [RegisterClientController::class, 'register']);
    Route::post('/add', [RegisterClientController::class, 'add']);


});

