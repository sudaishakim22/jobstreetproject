<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    //

    public function index(){
        $data["title"] = "Form Apply"; 

        return view("formApply", $data);
    }

    public function process(Request $request){
        $this->validate($request,[
            'fname' => 'required|min:5|max:20',
            'lname' => 'required|min:5|max:20',
            'email' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'salary' => 'required',
            'file' => 'required'
        ]);
        $file = $request->file('file');

        DB::table('pelamar')->insert([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'salary' => $request->salary,
            'file' => $file
        ]);
        
        // tempat file diupload
        $folder = 'file_upload';
        $file->move($folder, $file->getClientOriginalName());
        $data['title'] = "Success";
        return view("applySuccess", $data);
    }
}
