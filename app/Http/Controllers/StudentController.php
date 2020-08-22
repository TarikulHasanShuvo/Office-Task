<?php

namespace App\Http\Controllers;
use session;
use App\Student;
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
        $students= Student::paginate(3);

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

       // $students= Student::find($id);
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
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
     //return   $students=Student::find($student);
        $student->delete();

        return redirect()->back();


    }

    public function search(Request $request)
    {
        

        $name=$request->search;
        $gender=$request->gender;
        $status=$request->status;

  
  /*    $students =  Student::where ( 'name', 'LIKE', '%' . $name . '%' )
                  ->orWhere ( 'email', 'LIKE', '%' . $name . '%' )
                  ->union(Student::where( 'gender', $gender ))
                  ->union(Student::where ( 'status', $status ))
                  ->orderBy('name', 'asc')
                  ->paginate(3);
      */
$result = Student::query();

if (!empty($name)) {
    $result = $result->where ( 'name', 'LIKE', '%' . $name . '%' )
    ->orWhere ( 'email', 'LIKE', '%' . $name . '%' );
}
if (!empty($gender)) {
    $result = $result->where('gender', $gender);
}  
if (!empty($status)) {
    $result = $result->where('status', $status);
} 
$result = $result->paginate(3);  
     
           
        
       return view('allStudent')->with('students', $result);
    }



}
