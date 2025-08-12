<?php

namespace App\Http\Controllers;

use App\Models\Company;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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

    public function destroy($id){
        $company = Company::findOrFail($id);

        $company->delete();

        return redirect()->route('companies.list');
    }

    public function edit($id){
        $company = Company::findOrFail($id);    
         
       

        return view('admin.company_edit',compact('company'));
    }

    public function update(Request $request,$id){
        $company = Company::findOrFail($id);   

        $data = $request->validate([
            'name' => 'string|max:255|required',
            'company_email' => 'string|required',
            'company_phone_number' => 'string|max:255|required',
            'size' => 'in:startup,small,medium,big'
        ]);

        $company->update($data);

        return redirect()->route('companies.list');
    }
}
