{{View::make('Admin/header')}}

{{View::make('Admin/navbar')}}

  <div  class="modal-body" >
          
        <h5 class="modal-title" id="exampleModalLabel"> Registration Form</h5>
         
        
      </div>
      <form method="POST" action="/store" enctype="multipart/form-data" >
    @csrf
        <div class="modal-body">
          
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" name="company" class="form-control" value={{$edit->comapany_name}}>
            </div>
            <div class="form-group">
                <label>Mobile No. </label>
                <input type="integer"  name="mobile" class="form-control" value={{$edit->mobile}}>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value={{$edit->email}}>
            </div>
            
            <div class="form-group">
                <label>Date</label>
                <input type="date"  name="date" class="form-control"  value={{$edit->date}}>
            </div>

           

            <div class="form-group">
                <label>Status </label> <br>
                <input   type="radio" name="status"    value="Active"  /> Active
                <input   type="radio" name="status"     value="Inactive"   /> Inactive
            </div> 

        <div class="form-group">
                <label> Mail Body </label>
                <textarea maxlength="300" type="text" name="mailBody" class="form-control" value={{$edit->mail_bodyz}}> </textarea>
            </div>

       
        </div>
        <div class="modal-footer">
            <a class="btn btn-primary"  href={{url('admin')}}>Close</a> 
            <button type="submit" name="save"  class="btn btn-primary">Update</button>
        </div>
      </form>
   
      
  </div>
</div>

                    <!-- Content Row -->

           
                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



    <!-- End of Page Wrapper -->

  

   


    {{View::make('Admin/scripts')}} 
    {{View::make('Admin/footer')}}
