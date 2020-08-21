@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h4>All Student</h4>
                <form class="form-inline my-2 my-lg-0" action="{{route('student.search')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <select name="gender" id="gender">
                        <option value="">Genger</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Others</option>                  
                         </select>
                         </div>

                         <div class="form-group ml-2 mr-2" >
                        <select  name="status" id="status">
                        <option value="">Status</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                                     
                         </select>
                         </div>    
                 <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                <a href="{{url('student/create')}}" class="btn btn-primary">+Add Student</a>

                </div>

                <div class="card-body">
                   <table class="table">
                   <thead>
                       <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Eamil</th>
                           <th>Gender</th>
                           <th>Status</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($students as $student)


                       <tr>
                       <td>{{$student->id}}</td>
                           <td>{{ucfirst($student->name)}}</td>
                           <td>{{$student->email}}</td>
                           <td>{{ucfirst($student->gender)}}</td>
                        <td>  @if($student->status==1)
                            <span Class="btn btn-success btn-sm">Active</span>
                           @else  
                           <span Class="btn btn-info btn-sm">Deactive</span>
                           @endif
                           </td>
                           <td>
                            <a href="{{route('student.edit',['id'=>$student->id])}} " class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{route('student.destroy',['id'=>$student->id])}}" class="btn btn-danger btn-sm">Delete</a>


                           </td>
                       </tr>
                       @endforeach
                   </tbody>
                   </table>
                   {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
