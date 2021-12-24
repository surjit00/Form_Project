{{View::make('Admin/header')}}

{{View::make('Admin/navbar')}}

  <div  class="modal-body" >
          
        <h5 class="modal-title" id="exampleModalLabel"> <b>Registration Form</b></h5>
         
        
      </div>
      <form method="POST" action="/store" enctype="multipart/form-data" >
    @csrf
        <div class="modal-body">
          
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" name="company_name" class="form-control" placeholder="Enter Company name">
                <span style="color:red">
                    @error('company_name')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label>Mobile No. </label>
                <input type="integer"  name="mobile" class="form-control" placeholder="Enter Mobile No.">
                <span style="color:red">
                    @error('mobile')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                <span style="color:red">
                    @error('email')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>
            
            <div class="form-group">
                <label>Date</label>
                <input type="date"  name="date" class="form-control"  >
                <span style="color:red">
                    @error('date')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>

           

            <div class="form-group">
                <label>Status </label> <br>
                <input   type="radio" name="status"    value="Active"  /> Active
                <input   type="radio" name="status"     value="Inactive"   /> Inactive <br>
                <span style="color:red">
                    @error('status')
                    {{$message}}
                        
                    @enderror
                </span>
            </div> 

        <div class="form-group">
                <label> Mail Body </label>
                <textarea  type="text" name="mail_body" class="form-control" > </textarea>
                <span style="color:red">
                    @error('mail_body')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>

       
        </div>
        <div class="modal-footer">
            <a class="btn btn-primary"  href={{url('admin')}}>Close</a> 
            <button type="submit" name="save"  class="btn btn-primary">Save</button>
        </div>
      </form>

     
   
      
  </div>
</div>
      

           
                   
                </div>
                 

            </div>
              

   


    {{View::make('Admin/scripts')}} 
    {{View::make('Admin/footer')}}
