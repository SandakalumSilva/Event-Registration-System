<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    
    {{-- custom style --}}
    <link href="simple-sidebar.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>  
  <div class="row p1" >
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" >
          <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="row container">
              <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <b>Event Registration</b>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <a href="/login"><b>Login</b></a>
              </div>
            </div>
          </nav>
    </div>
  </div>
    <div class="row p1" >        
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1" >
            <div style="padding-top: 20%;">
            
            </div>  
        </div> 
        
        
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
          
          
            <div class="header">
              <h2>Upcoming Events</h2>
            </div>
          <div class="row container my-custom-scrollbar">  
              <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th >Event</th>
                      <th >Date</th>                  
                    </tr>
                  </thead>
                  @foreach($data as $add_ad)
                  <tr>   
                    <td>{{$add_ad->event}}</td> 
                    <td>{{$add_ad->date}}</td> 
                  </tr>
                  @endforeach             
              </table>
          
          </div>    
          
            <h3>Event Registration</h3>
            <form method="POST" action="/save_reg">
              {{csrf_field()}}
              <div class="row">
              <div class="form-group col-lg-4">                
                <input type="text" name="reg_name" class="form-control" id="exampleInputEmail1"  placeholder="Name">               
              </div>
              <div class="form-group col-lg-4">                
                <input type="email" name="reg_email" class="form-control" id="exampleInputPassword1" placeholder="Email">
              </div>
              <div class="form-group col-lg-4">                
                <input type="number" name="reg_number" class="form-control" id="exampleInputPassword1" placeholder="Contact_Number">
              </div>
            </div> 
            <div class="row">
              <div class="form-group col-lg-4">               
                <input type="number" name="reg_nic" class="form-control" id="exampleInputPassword1" placeholder="NIC">
              </div>
              
                <div class="form-group col-lg-4">               
                  <input type="text" name="reg_event" class="form-control" id="exampleInputPassword1" placeholder="Event">
                </div>
                <div class="form-group col-lg-4">               
                  <input type="text" name="reg_add" class="form-control" id="exampleInputPassword1" placeholder="Address">
                </div>
            </div>            
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
      </div>
        
      </div>
</body>
</html>