<?php

namespace App\Http\Controllers;

use App\Models\Mattress;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.adminDashboard');
    }

    public function getAllProducts(){
        $mattress = Mattress::with('company')->get();

        return view('admin.products_list',compact('mattress'));
    }
}
