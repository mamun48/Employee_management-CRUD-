<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::paginate(5);
        return view('employee.index')->with('employees',$employee);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'job_title' => 'required|string|max:255',
            'joining_date' => 'required',
            'salary' => 'required|numeric|integer|gte:10',
            'email'=> 'nullable|unique:employees,email',
            'mobile' => 'required|string',
            'address'=> 'required|string'
        ];
        $request->validate($rules);
        $employee = Employee::create($request->all());
        $employees = Employee::paginate(5);
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $employee = Employee::find($id);
        return view('employee.show')->with('employee',$employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $employee = Employee::find($id);
        return view('employee.update')->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $rules = [
            'name' => 'required|string',
            'job_title' => 'required|string|max:255',
            'joining_date' => 'required',
            'salary' => 'required|numeric|integer|gte:10',
            'email'=> 'nullable|unique:employees,email,'.$id,
            'mobile' => 'required|string',
            'address'=> 'required|string'
        ];
        $request->validate($rules);
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employee.show',$employee->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }
    public function search(Request $request)
    {
        $search = $request->input('search'); 
        $employees = Employee::where('name','like','%'.$search.'%')->orWhere('job_title','like','%'.$search.'%')->paginate(5);
       
        return view('employee.index')->with('employees',$employees);
    }
}
