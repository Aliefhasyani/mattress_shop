<?php

namespace App\Http\Controllers;

use App\Models\Mattress;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getAll(){
        $mattress = Mattress::with('company')->get();

        return view('products_list',compact('mattress'));
    }
}
