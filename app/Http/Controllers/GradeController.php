<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;


class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grade=Grade::all();
       
        return view('grade.index',compact('grade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('grade.create');
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
        $gname=$request->input('gname');
       
       

        $grade=new Grade();
        $grade->name=$gname;

        $grade->save();
        
        return redirect()->route('grades.index');
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
        $grade=Grade::find($id);
   
       return view('grade.show',compact('grade'));
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
        $grade=Grade::find($id);
        // return $employee;
       return view('grade.edit',compact('grade'));
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
        $gname=$request->input('gname');
      
       

        $grade=Grade::find($id);
        $grade->name=$gname;

       

        $grade->save();
        $grade=Grade::all();
        return view('grade.index',compact('grade'));

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
        $grade=Grade::find($id);
        $grade->delete();
        return redirect()->route('grades.index');
    }
}
