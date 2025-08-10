<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function create(){
    
        
        return view('admin.create_company');
    }


    public function store(Request $request){
        $data = $request->validate([
            'name' => 'string|max:255|required',
            'company_email' => 'string|required',
            'company_phone_number' => 'string|max:255|required',
            'company_size' => 'in:startup,small,medium,big'
        ]);

        Company::create($data);

        return redirect()->route('companies.list');
    }
}
