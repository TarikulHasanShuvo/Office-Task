@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Update Student</h4>
                <a href="{{url('/student')}}" class="btn btn-primary">Back All Student</a>

                </div>

                <div class="card-body">

                    <form action="{{route('student.update',$students->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $students->name}}">
                         </div>

                         <div class="form-group">
                        <label for="email">eamil</label>
                        <input type="eamil" class="form-control" name="email" placeholder="Enter eamil" value="{{ $students->email}}">
                         </div>

                         <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" value="{{ $students->gender}}">
                        
                        <option value="male" Selected>Male</option>
                        <option value="female">Female</option>
                        <option value="other">Others</option>                  
                         </select>
                       
                         <div class="form-group">
                        <label for="email">Status</label><br/>
                        <input type="radio" id="active" name="status" value="1">
                        <label for="active">Active</label><br>
                        <input type="radio" id="deactive" name="status" value="0">
                        <label for="deactive">Deactive</label><br>
                        </div>
                               
                         </div>

                       <button type="submit" class="btn btn-success">Update</button>

                    </form>






                  </div>
              </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
