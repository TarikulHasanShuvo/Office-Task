<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Laravel CRUD With Ajax</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <a href="{{url('/')}}"> <h4>All Student</h4></a>
                       
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        +Add Student
      </button>
                    </div>
    
                    <div class="card-body">
                       <table class="table">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>Name</th>
                               <th>Eamil</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody id="studentTableBody">
                           @foreach ($students as $student)
                       <tr data-id="{{$student->id}}">
                           <td>{{$student->id}}</td>
                                <td id ="sname">{{ucfirst($student->name)}}</td>
                                <td id = "semail">{{$student->email}}</td>
                                  <td>
                                     <div class="d-flex">
                                        <a href="" class="btn btn-primary btn-sm mr-2 edit" data-toggle="modal" data-target="#updateModal">Edit</a>
                                        <form id="deleteStudent" >
                                        <button  type="submit" class="btn btn-danger btn-sm">Delete</button>
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
      
      <!-- Create Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form id="createStudent">
            <div class="modal-body">
                        <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                         </div>
    
                         <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                         </div>         
                     </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
          </div>
        </div>
      </div>

        <!--Update Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <form id="updateStudent">
                <div class="modal-body">
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="inputName" class="form-control" name="name" placeholder="Name">
                             </div>
        
                             <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Enter email">
                             </div>         
                         </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
              </div>
            </div>
          </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>

</body>
</html>