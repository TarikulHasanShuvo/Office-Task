<?php

namespace App\Http\Controllers;
use session;
use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= student::paginate(3);

       return view('allStudent')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data = new student;
            $data->name= $request->name;
            $data->email= $request->email;
            $data->gender= $request->gender;
             $data->status= $request->status;
             $data->save();


     return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student,$id)
    {

        $students= student::find($id);
        return view('update')->with('students',$students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student,$id)
    {
         $student=student::find($id);
        $student->name = $request->name;
       $student->email= $request->email;
       $student->gender= $request->gender;
       $student->status= $request->status;
       $student->save();

       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student,$id)
    {
        $student=student::find($id);
        $student->delete();

        return redirect()->back();


    }

    public function search(Request $req)
    {
        $name=$req->search;
        $gender=$req->gender;
        $status=$req->status;

    
        if($name)
        {
       $students = student::where ( 'name', 'LIKE', '%' . $name . '%' )
       ->orWhere ( 'email', 'LIKE', '%' . $name . '%' )
       ->paginate(3);
        }
        else{
            $students = student::where ( 'gender','=', $gender )
           ->orwhere( 'status', $status )
           ->paginate(3);
        }
       return view('search')->with('students', $students);
    }



}
