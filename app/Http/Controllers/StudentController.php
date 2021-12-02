<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use Mockery\Matcher\Subset;
use Carbon\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student=Student::all();
        //return $employee;
        return view('student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $grades=Grade::all();
        $subjects=Subject::all();
        return view('student.create',compact('grades','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //
        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $gender=$request->input('gender');
        $grade=$request->input('grade');
        $address=$request->input('address');
        $subject=json_encode($request['subject']);

        $dob=$request->input('dob');


          $request->validate([
            'dob' => [
                'required',
                function ($attribute, $value, $fail) {
                   $now = Carbon::now();
                   $userDob = Carbon::parse($value);
                   if ($userDob->diffInYears($now) <= 18) {
                       $fail('You are less than 18 years old');

                   }
                },
             ]
            ]);
        $email=$request->input('email');
        $phone=$request->input('phone');


        $student=new Student();
        $student->first_name=$fname;
        $student->last_name=$lname;
        $student->gender=$gender;
        $student->grade=$grade;
        $student->address=$address;
        $student->subject = $subject;;
        $student->dob=$dob;
        $student->email=$email;
        $student->mobile=$phone;

        $student->save();
        // $student=Student::all();
        // return view('student.index',compact('student'));
        return redirect()->route('students.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student=Student::find($id);
        // return $employee;
       return view('student.show',compact('student'));
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
        $student=Student::find($id);
        // return $employee;
       return view('student.edit',compact('student'));
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
        $gender=$request->input('gender');
        $grade=$request->input('grade');
        $address=$request->input('address');
        $subject=json_encode($request->input('subject'));

        $dob=$request->input('dob');
        $request->validate([
            'dob' => [
                'required',
                function ($attribute, $value, $fail) {
                   $now = Carbon::now();
                   $userDob = Carbon::parse($value);
                   if ($userDob->diffInYears($now) <= 18) {
                       $fail('You are less than 18 years old');

                   }
                },
             ]
            ]);
        $email=$request->input('email');
        $phone=$request->input('phone');


        $student=Student::find($id);
        $student->first_name=$fname;
        $student->last_name=$lname;
        $student->gender=$gender;
        $student->grade=$grade;
        $student->address=$address;
        $student->subject = $subject;
        $student->dob=$dob;
        $student->email=$email;
        $student->mobile=$phone;

        $student->save();
        $student=Student::all();
        return view('student.index',compact('student'));
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
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('students.index');
    }
}
