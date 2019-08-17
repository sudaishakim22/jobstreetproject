<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(){
        $data["title"] = "Home";
        $jobs['jobsData'] = DB::table('jobs')->get();   
        return view("home", $data, $jobs);
    }

    public function viewDetail($companyName){
        $data['title'] = "Detail Jobs";
        $company['companyData'] = DB::table('company')->where('companyName', $companyName)->first();
        return view("detail", $data, $company);
    }
}
