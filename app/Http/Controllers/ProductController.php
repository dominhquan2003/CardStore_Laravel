<?php

namespace App\Http\Controllers;


use App\Models\listproduct;
use App\Models\product;
use Illuminate\Http\Request;
use Carbon\Carbon;



class ProductController extends Controller
{

    public function showdatapro()
    {
        $pro =  product::all();
        $listproduct = listproduct::all();
        return view('admincomponent.tables.products', compact('pro', 'listproduct')); //  show product and list product
    }


    public function addproduct()
    {
        return view('admincomponent.forms.add');
    }

    public function save(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('img'), $file_name);
        }

        product::create([
            'tensp' => $request->input('name'),
            'giasp' => $request->input('giasp'),
            'mota' => $request->input('mota'),
            'soluong' => $request->input('soluong'),
            'ID_DMSP' => $request->input('ID_DMSP'),
            'link' => $file_name,
        ]);
        return redirect()->route('tableproduct');
    }




    public function delete($id)
    {
        product::where('id', $id)->update([
            'status' => 0
        ]);
        return  redirect('admin/table/products');
    }


    public function formupdate($id)
    {
        $data = product::where('id', $id)->first();

        return view('admincomponent.forms.update')->with('data', $data);
    }


    public function update($id, Request $request)
    {
        if ($request->hasFile('image_update')) {
            $file = $request->file('image_update');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('img'), $file_name);
            product::where('id', $id)->update([
                'tensp' => $request->input('name'),
                'giasp' => $request->input('giasp'),
                'mota' => $request->input('mota'),
                'soluong' => $request->input('soluong'),
                'ID_DMSP' => $request->input('ID_DMSP'),
                'link' => $file_name,
                'status' => $request->input('status') ,

            ]);
            return redirect('admin/table/products');
        }else {

            product::where('id', $id)->update([
                'tensp' => $request->input('name'),
                'giasp' => $request->input('giasp'),
                'mota' => $request->input('mota'),
                'soluong' => $request->input('soluong'),
                'ID_DMSP' => $request->input('ID_DMSP'),
                'link' => $request->input('old_data'),
                'status' => $request->input('status') ,
            ]);
            return redirect('admin/table/products');
        }
    }
}
