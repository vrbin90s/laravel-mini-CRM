<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyLogoUploadRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\CompaniesController;
use Illuminate\Foundation\Http\FormRequest;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use App\Models\Postimage;


class CompaniesController extends Controller
{
    public function index()
    {
        
        $companies = Company::orderBy('name', 'asc')->paginate(10);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        $company = new Company();
        return view('companies.create', compact('company'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]);
        
        Company::create($request->all());
        return redirect()->route('companies.index')->with('message', 'Company has been added successfully');
    }

    public function show($id) {
        $company = Company::findOrFail($id);
        return view('companies.show', compact('company'));
    }

    public function edit($id) {
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
    }

    public function update($id, Request $request) {

        $company = Company::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]);

        if ($request->hasFile('logo')) {

            $request->validate([
                'logo' => 'mimes:jpeg,png,jpg'
            ]);

            $company->logo = "company-logo-{$company->id}.".$request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->storeAs('public', "company-logo-{$company->id}.".$request->file('logo')->getClientOriginalExtension());

            $company->name = $request->get('name');
            $company->email = $request->get('email');
            $company->website = $request->get('website');
    

        }

        $company->name = $request->get('name');
        $company->email = $request->get('email');
        $company->website = $request->get('website');

        

        $company->save();
        

        return redirect()->route('companies.index')->with('message', 'Company details has been updated successfully');
    }

    public function destroy($id) {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('companies.index')->with('message', 'Employee details has been deleted successfully');
    }

    public function logoUrl() 
    {
        return Storage::exists($this->logo) ? Storage::url($this->$logo) : 'http://via.placeholder.com/100x100';
    }

}
