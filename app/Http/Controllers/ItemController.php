<?php

namespace App\Http\Controllers;

use App\Models\Mattress;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getAll(){
        $mattress = Mattress::all();

        return view('products_list',compact('mattress'));
    }

    public function show($id){
        $mattress = Mattress::with('company')->findOrFail($id);

        return view('mattress_detail',compact('mattress'));
    }
}
