<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = Company::all();
        return view('Companies.index',[
            'companies' => $companies
        ]);
    }

    public function create()
    {
        return view('Companies.create');
    }

    public function store(Request $request)
    {
        $company = Company::create([
           'name' => $request->input('name')
        ]);

      return redirect('companies');
    }

    public function edit($id)
    {
        $company =  Company::find($id);

        return view('Companies.edit',[
            'company' => $company
        ]);
    }

    public function update($id)
    {
        $company= Company::find($id);
        $company->name = \request('name');
        $company->save();
        return redirect('companies');
    }

    public function destroy($id)
    {
        Company::destroy($id);

        return redirect('companies');
    }
}
