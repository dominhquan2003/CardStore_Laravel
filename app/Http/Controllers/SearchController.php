<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $data = [
            'products' =>  product::where('tensp', 'LIKE', "%$query%")->get(),
        ];

        return view('client.sectionsearch')->with($data);
    }
    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $products = Product::where('name', 'LIKE', "%$query%")->get();
    //     return view('products.index', compact('products'));
    // }
}
