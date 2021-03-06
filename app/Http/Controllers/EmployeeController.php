<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employee=Employee::all();
        //return $employee;
        return view('employee.index',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $a=$request->all;
        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $dob=$request->input('dob');
        $salary=$request->input('salary');

        $employee=new Employee();
        $employee->first_name=$fname;
        $employee->last_name=$lname;
        $employee->dob=$dob;
        $employee->salary=$salary;

        $employee->save();
      //  return redirect()->route('employee.index');
        $employee=Employee::all();
        return view('employee.index',compact('employee'));
       // return $employee;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $employee=Employee::find($id);
       // return $employee;
      return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee=Employee::find($id);
        // return $employee;
       return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $dob=$request->input('dob');
        $salary=$request->input('salary');

        $employee=Employee::find($id);
        $employee->first_name=$fname;
        $employee->last_name=$lname;
        $employee->dob=$dob;
        $employee->salary=$salary;

        $employee->save();
        $employee=Employee::all();
        return view('employee.index',compact('employee'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $employee=Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index');
     //  return "delete";
       // return view('employee.index');
    }
}
