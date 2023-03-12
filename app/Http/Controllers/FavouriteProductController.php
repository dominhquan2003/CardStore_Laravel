<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;

class FavouriteProductController extends Controller
{
    public function heart()
    {
        return view('client.favourite');
    }

    public function addfavourite($id)
    {
        $product = product::find($id);
        $favouritecart = session()->get('favouritecart', []);
        // dd( $detailproduct) ;
            $favouritecart[$id] = [
                'tensp' => $product->tensp,
                'giasp' => $product->giasp,
                'soluong' => $product->soluong ,
                'link' => $product->link,
            ];


        session()->put('favouritecart', $favouritecart);


        return redirect()->route('favouritecart')->with('Success_addproduct', 'Product is added in favourite cart successfully');
    }

    public function delete($id)
    {
        $favouritecart = session()->get('favouritecart', []);
        if (isset($favouritecart[$id])) {
            unset($favouritecart[$id]);
            session()->put('favouritecart', $favouritecart);
            return redirect()->route('favouritecart')->with('Success', 'Product removed from cart successfully');
        }
        return redirect()->route('favouritecart')->with('error', 'Product not found in cart');
    }



}
