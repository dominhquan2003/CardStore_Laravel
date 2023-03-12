<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index($id){
        $product = product::where('id',$id)->first() ;
        $productrelated = Product::where('ID_DMSP', $product->ID_DMSP)->inRandomOrder()->take(5)->get();
        return view('client.single-product',compact('product' , 'productrelated') );
    }
}
