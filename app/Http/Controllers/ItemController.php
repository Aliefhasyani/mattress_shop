<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Mattress;
use COM;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

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

    public function create(){
        $company = Company::all();
        return view('create_product',compact('company'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'string|max:255|required',
            'quantity_in_stock' => 'integer|required',
            'price' => 'numeric|required',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'desc' => 'string|max:255|required',
            'company_id' => 'required|exists:company,id'
        ]);

       
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('mattresses', 'public');
        }

        Mattress::create($validated);

        return redirect()->route('products.list')->with('success', 'Mattress created successfully.');
    }

    public function destroy($id){
        $mattress = Mattress::findOrFail($id);

        $mattress->delete();

         return redirect()->route('products.list');
    }

    public function home(){
        $offers = Mattress::where('price' , '<' , 10000)->limit(4)->get();

        return view('home',compact('offers'));

    }

    public function edit($id){
        $mattress = Mattress::with('company')->findOrFail($id);
        $company = Company::all();
        return view('edit_product',compact('mattress','company'));
    }

    public function update(Request $request, $id){
        $mattress = Mattress::findOrFail($id);
        
        $data = $request->validate([
            'name' => 'string|max:255|required',
            'quantity_in_stock' => 'integer|required',
            'price' => 'numeric|required',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'desc' => 'string|max:255|required',
            'company_id' => 'required|exists:company,id'
        ]);

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('products', 'public');
            $data['image_path'] = $path;
        } else {
       
            $data['image_path'] = $mattress->image_path;
        }

        $mattress->update($data);

        return redirect()->route('products.list');

    }   



}
