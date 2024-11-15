<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
 

class EmployeeController extends Controller
{
    
    public function add()
    {
        return view('admin.employee-add');
    }
    
    public function insert(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|unique:employees',
            'mobile'      => 'required|numeric|digits:10',
            'address'     => 'required|string|max:255',
            'base_salary' => 'required|numeric|min:0',
        ]);
        $add_employee = new Employee;
        $add_employee->name        = $request->name;
        $add_employee->email       = $request->email;
        $add_employee->mobile      = $request->mobile;
        $add_employee->address     = $request->address;
        $add_employee->base_salary = $request->base_salary;
        $add_employee->save();

        return redirect()->route('employee.list')->with('success','Employee Add SuccessFully!');
    }
  
    
    public function list()
    {
        $employees = Employee::all();
        return view('admin.employees-list',['employees'=>$employees]);
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return view('admin.employee-view',['employee'=>$employee]);
    }

    public function edit($id)
    {
        $employee_edit = Employee::find($id);
        return view('admin.employee-edit',['employee_edit'=>$employee_edit]);
    }

    public function update(Request $request,$id)
    {
        $employee_update = Employee::find($id);
        $request->validate
        ([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:employees,email,'.$employee_update->id,
            'mobile'      => 'required|numeric|digits:10',
            'address'     => 'required|string|max:255',
            'base_salary' => 'required|numeric|min:0',

        ]);

       $employee_update->name        = $request->name;
       $employee_update->email       = $request->email;
       $employee_update->mobile      = $request->mobile;
       $employee_update->address     = $request->address;
       $employee_update->base_salary = $request->base_salary;
       $employee_update->update();

       return redirect()->route('employee.list')->with('success','Employee Updated SuccessFully!');
    }

    public function delete($id)
    {
        Employee::destroy($id);
        return redirect()->back()->with('success','Employee Data Deleted SuccessFully!');
    }

   
}
