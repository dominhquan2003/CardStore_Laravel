<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listproduct;
use Carbon\Carbon;

class ListProductController extends Controller
{

    public function addlp()
    {
        return view('admincomponent.forms.addlistproduct');
    }

    public function savelist(Request $request)
    {
        $date = $request->input('created');
        $date = Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');

        listproduct::create([
            'tendm' => $request->input('name'),
            'status' => $request->input('status'),
            'created_date' => $date
        ]);

        return redirect()->route('tableproduct');
    }



    public function delete($id)
    {
        listproduct::where('id', $id)->update([
            'status' => 0
        ]) ;
        return  redirect('admin/table/products');
    }

    public function formupdate($id){
        $data =listproduct::where('id',$id)->first() ;

        return view('admincomponent.forms.updatelistproduct')->with('data',$data);
    }

    public function update($id, Request $request)
    {
        $date = $request->input('created');
        $date = Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
        listproduct::where('id', $id)->update([
            'tendm' => $request->input('name'),
            'status' => $request->input('status'),
            'created_date' => $date
        ]);
        return redirect('admin/table/products');
    }
}
