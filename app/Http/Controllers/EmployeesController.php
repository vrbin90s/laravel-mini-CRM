<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use App\Http\Controllers\EmployeesController;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        $employees = Employee::orderBy('first_name', 'asc')->where(function($query){
            
            if ($companyId = request('company_id')){
                $query->where('company_id', $companyId);
            }
        })->paginate(10);
        return view('employees.index', compact('employees', 'companies'));
    }

    public function create()
    {
        $employee = new Employee();
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('employees.create', compact('companies', 'employee'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email',
            'company_id' => 'required|exists:companies,id',
        ]);
        
        Employee::create($request->all());
        return redirect()->route('employees.index')->with('message', 'Employee has been added successfully');
    }

    public function edit($id) {
        $employee = Employee::findOrFail($id);
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('employees.edit', compact('companies', 'employee'));
    }

    public function update($id, Request $request) {

        
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email',
            'company_id' => 'required|exists:companies,id',
        ]);
        
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employees.index')->with('message', 'Employee details has been updated successfully');
    }

    public function show($id) {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function destroy($id) {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('message', 'Employee details has been deleted successfully');
    }
}
