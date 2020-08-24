@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <a href="{{url('/')}}"> <h4>All Student</h4></a>
                    <form class="form-inline my-2 my-lg-0" action="{{ route('student.index') }}" method="get">
                        <div class="form-group">
                            <select name="gender" id="gender">
                                <option value="">Genger</option>
                                <option value="male" {{ request()->gender == 'male' ? 'selected=""':'' }}>Male</option>
                                <option value="female" {{ request()->gender == 'female' ? 'selected=""':'' }}>Female</option>
                                <option value="other" {{ request()->gender == 'other' ? 'selected=""':'' }}>Others</option>                  
                            </select>
                        </div>
                        <div class="form-group ml-2 mr-2" >
                            <select  name="status" id="status">  
                                <option value="">Status</option>
                                <option value="1" {{ request()->status == '1' ? 'selected=""':'' }}>Active</option>
                                <option value="0" {{ request()->status == '0' ? 'selected=""':'' }}>Deactive</option>
                            </select>
                        </div>    
                        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ Request::get('search') }}">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <a href="{{ route('student.create') }}" class="btn btn-primary">+Add Student</a>

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
                            <td>
                                @if($student->status==1)
                                <span Class="btn btn-success btn-sm">Active</span>
                                @else  
                                <span Class="btn btn-danger btn-sm">Deactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('student.edit',$student->id)}}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                    <form action="{{route('student.destroy',$student->id)}}" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div> 
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
                   </table>
                
                   {{ $students->appends(request()->all())->links()  }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
