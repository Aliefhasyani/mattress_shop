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

    public function show($id){
        $mattress = Mattress::with('company')->findOrFail($id);

         return view('mattress_detail',compact('mattress'));
    }

    public function getAllCompanies(){
        $companies = Company::withCount('mattress as count')->get();

        return view('admin.company_list',compact('companies'));
    }

    public function about(){
        return view('about');
    }

    public function search(Request $request){
        $query = $request->input('keyword');
        $mattress = Mattress::where('name', 'like', '%' . $query . '%')->get();

        return view('admin.products_list', compact('mattress'));
    }

}
