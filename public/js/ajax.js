$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }

});
// Create Student
$('#createStudent').submit(function(e){
    e.preventDefault();

    let formData = {
        name: $('#createStudent input[name="name"]').val(),
        email: $('#createStudent input[name="email"]').val(),
    }


    $.ajax({
        type: "POST",
        url: '/student',
        data: formData,
        success:function(data){
            console.log(formData);
            $('#createStudent input').val('');

            $('#studentTableBody').append(`
            
            <tr>
            <td>`+ data.id +`</td>
                 <td>`+ data.name +`</td>
                 <td>`+ data.email +`</td>
                   <td>
                      <div class="d-flex">
                         <a href="" class="btn btn-primary btn-sm mr-2">Edit</a>
                         <a href="" class="btn btn-danger btn-sm mr-2">Delete</a>
                     </div> 
                </td>
            </tr>
            `)


        },
        error:function(error){
            console.log(error);
        }
    })
})


// Edit student
let id;
$(document).on('click','.edit',function(){

     id = $(this).closest('tr').data('id');
    let modal = $('#updateStudent');

    $.ajax({
        type: "GET",
        url: '/student/'+id+'/edit',
        success:function(data){
         $(modal).find('#inputName').val(data.name);  
         $(modal).find('#inputEmail').val(data.email);    
        },
        error:function(error){
            console.log(error);
        }
    })


});

// Update Student
$('#updateStudent').submit(function(e){
    e.preventDefault();

    let formData = {
        name: $('#updateStudent input[name="name"]').val(),
        email: $('#updateStudent input[name="email"]').val(),
    }


    $.ajax({
        type: "PUT",
        url: '/student/'+id,
        data: formData,
        success:function(data){
            console.log(formData);
            let row =  $('#studentTableBody').find('tr[data-id="'+id+'"]');
           $(row).find('td.sname').text(formData.name);
            $(row).find('td.semail').text(formData.email);
            $('#updateStudent input').val('');
    

        },
        error:function(error){
            console.log(error);
        }
    })
})

//Delete Student

$('#deleteStudent').submit(function(e){
    e.preventDefault();
    id = $(this).closest('tr').data('id');


    $.ajax({
        type: "DELETE",
        url: '/student/'+id,
        success:function(data){
            console.log("Delete Successful");
        },
        error:function(error){
            console.log(error);
        }
    })
})
