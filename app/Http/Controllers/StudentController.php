<?php

namespace App\Http\Controllers;
use session;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {     
     

   
        $result = Student::query();

        if (!empty($request->search)) {
            $result = $result->where( function($q) use($request) {
                $q->where ( 'name', 'LIKE', '%' . $request->search . '%' )
                ->orWhere ( 'email', 'LIKE', '%' . $request->search . '%' );
            });
        }
        if (!empty($request->gender)) {
            $result = $result->where('gender', $request->gender);
        }  
        if (!empty($request->status)) {
            $result = $result->where('status', $request->status);
        } 
        $result = $result->paginate(2);  
            
       return view('allStudent')->with('students', $result);
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

        $data = new Student;
        $data->name= $request->name;
        $data->email= $request->email;
        $data->gender= $request->gender;
        $data->status= $request->status;
        $data->save();
        toast('Data Insert Successfully ','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('update')->with('students',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    { 
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

        $student->name = $request->name;
        $student->email= $request->email;
        $student->gender= $request->gender;
        $student->status= $request->status;
        $student->save();
        toast('Data Update Successfully ','success');
       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete();
        return redirect()->back();
    }
}
