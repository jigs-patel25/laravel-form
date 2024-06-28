<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return view('frontend.contact');
       }


    //    ------file upload--------

    public function upload(Request $request){
    // echo "<pre>";
    // print_r($request->all());
    $filename = time() . "-ws." .$request->file('upload_file')->getClientOriginalExtension();
    // echo $filename;
    // die;
       $request->file('upload_file')->storeAs('uploads',$filename);
    }
};
