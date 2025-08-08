<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Mattress;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $mattress = Mattress::count();
        $companies = Company::count();
        return view('admin.adminDashboard',compact('mattress','companies'));
    }

    public function getAllProducts(){
        $mattress = Mattress::with('company')->get();

        return view('admin.products_list',compact('mattress'));
    }

    public function getAllCompanies(){
        $companies = Company::all();

        return view('admin.company_list',compact('companies'));
    }
}
