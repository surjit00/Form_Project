{{View::make('Admin/header')}}

{{View::make('Admin/navbar')}}

             

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>

                    <!-- Content Row -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="{{url('registration')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class=" fa-sm text-white-50"></i> Registration</a>

                    </div>
  
 

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Company Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">Mail Body</th>

      <th  colspan="2">Action</th>
    </tr>
      @foreach ($registration as $Registration)
         <tr>
           <td>{{$Registration->id}}</td>
           <td>{{$Registration->company_name}}</td>
           <td>{{$Registration->mobile}}</td>
           <td>{{$Registration->email}}</td>
           <td>{{$Registration->date}}</td>
            <td>{{$Registration->status}}</td>
            <td>{{$Registration->mail_body}}</td>
           
       <td>  <a href="/edit/{{$Registration->id}}"> <i class="fa fa-edit" aria-hidden="true"></i></a></td>
      <td><a href="/delete/{{$Registration->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
    </td> 
           </tr> 
      @endforeach
    
  </thead>
  
</table>

</div>



<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          
        <h5 class="modal-title" id="exampleModalLabel"> Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form   method="POST" enctype="multipart/form-data" >

        <div class="modal-body">
            


            <div class="form-group">
                <label> Username </label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label> Age </label>
                <input type="number" id="age" name="age" class="form-control" placeholder="Enter Age">
            </div>
            <div class="form-group">
                <label> Profile Picture </label> <br>
                <input onchange="OnFileValidation()" id="image" type="file" name="profile_photo" class="form-control" value="" >
            </div>
            
            <div class="form-group">
                <label> Marital Status </label> <br>
                <input   type="radio" name="marital"    value="Married"  /> Married 
                <input   type="radio" name="marital"     value="Unmarried"   /> Unmarried
            </div>

            <hr>
            <div class="form-group">
                <label> Write About Yourself  </label>
                <textarea maxlength="300" type="text" name="textarea" id="textarea" class="form-control" placeholder="Write About Yourself"> </textarea>
            </div>

       
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="save" id="save" class="btn btn-primary">Save</button>
        </div>
      </form>
    
    </div>
</div>

                          
                   
                </div>
          
            </div>
            


 
  









{{View::make('Admin/scripts')}} 
{{View::make('Admin/footer')}}



