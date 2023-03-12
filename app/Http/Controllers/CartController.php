<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\customer;
use App\Models\orderform;
use App\Models\orderformdetail;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {
        return view('client.cart');
    }

    public function addcart($id, Request $request)
    {
        $product = product::find($id);
        $cart = session()->get('cart', []);
        $detailproduct = $request->input('detailproduct');
        // dd( $detailproduct) ;
        if (isset($cart[$id])) {
            $cart[$id]['soluong']+= $detailproduct ;
        } else {
            $cart[$id] = [
                'tensp' => $product->tensp,
                'giasp' => $product->giasp,
                'soluong' => $detailproduct,
                'link' => $product->link,
            ];

        }
        session()->put('cart', $cart);


        // session()->put('product_id',$id) ;
        return redirect()->route('cart')->with('Success_addproduct', 'Product is added in cart successfully');
    }



    public function addinfocart_db(Request $request)
    {
        customer::create([
            'hoten' => $request->input('name'),
            'email' => $request->input('email'),
            'sdt' => $request->input('phonenumber'),
            'diachi' => $request->input('diachi'),
        ]);

        $cus = customer::latest()->first();
        $latestCustomerId = $cus->id;
        $diachi = $cus->diachi;

        $total = 0;
        foreach (session('cart') as $id => $details) {
            if (session('cart')) {
                $total += $details['giasp'] * $details['soluong'];
            }
            break;
        }
        orderform::create([
            'khachhang_id' => $latestCustomerId,
            'thanhtoan' => $total,
            'sdt' => $request->input('phonenumber'),
            'diachi' => $diachi,
        ]);
        $order = orderform::latest()->first();
        $order_id = $order->id;
        foreach (session('cart') as $id => $details) {
            orderformdetail::create([
                'id_donhang' => $order_id,
                'id_SP' => $id,
                'soluongmua' => $details['soluong'],
                'giaban' => $details['giasp'],
                'link' => $details['link'],
            ]);
        }

        // id_donhang	id_SP	soluongmua	giaban	status	created_date
        // if (session('cart')) {
        //     foreach (session('cart') as $id => $details) {
        //         orderform::create([
        //             'id_SP' => $id,
        //             'soluongmua' => $details['soluong'],
        //             'giaban' => $details['giasp'],
        //         ]);
        //     }
        // }
        Session::forget('cart');
        return redirect()->route('cart')->with('Success', 'Your information is saved');
    }



    public function delete($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('Success', 'Product removed from cart successfully');
        }
        return redirect()->route('cart')->with('error', 'Product not found in cart');
    }


  
}
