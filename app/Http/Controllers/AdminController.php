<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(){
        $data["title"] = "dashbord";
        $jobs['jobsData'] = DB::table('jobs')->get();
        return view("dashbordAdmin", $data, $jobs);
    }

    public function addJob(Request $request){
        DB::table('jobs')->insert([
            'josName' => $request->jobname,
            'jobDescription' => $request->jobdescription,
            'jobsSalary' => $request->salary,
            'jobsCity' => $request->jobcity,
            'companyName' => $request->companyname
        ]);

        return redirect("/home/admin");
    }

    public function edit($id){
        $data["editData"] = DB::table('jobs')->where('id',$id)->get();
        $data["title"] = "Edit Job";
        return view("editJob", $data);
    }

    public function update(Request $request){
        DB::table('jobs')->where('id',$request->id)->update([
            'josName' => $request->jobname,
            'jobDescription' => $request->jobdescription,
            'jobsSalary' => $request->salary,
            'jobsCity' => $request->jobcity,
            'companyName' => $request->companyname
        ]);

        return redirect("/home/admin");
    }

    public function delete($id){
        DB::table('jobs')->where('id', $id)->delete();

        return redirect("home/admin");
    }
}
