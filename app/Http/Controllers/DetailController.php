<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\detail;

class DetailController extends Controller
{
    public function home(){
        $call = detail::all();
        return view('crm',['call'=>$call]);
    }

    public function store(Request $req){
        $req->validate([
            'name'=>'required',
            'contact'=>'required | min:10 | max:10',
            'address'=>'required',
            'remark'=>'required',
            'email'=>'required | email',
        ]);
        $save_detail = new detail();

        $save_detail->name = $req->name;
        $save_detail->contact = $req->contact;
        $save_detail->address = $req->address;
        $save_detail->remark = $req->remark;
        $save_detail->email = $req->email;

        $save_detail->save();

        return redirect()->route('home');
    }


    public function delete($id){
        detail::find($id)->delete();

        return redirect()->route('home');

    }
}
