<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    
    {{-- custom style --}}
    <link href="simple-sidebar.css" rel="stylesheet">
    <title>Event_Registration</title>
</head>
<body>
  <div class="row p1 " > 
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 container" >
      <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="row container">
          <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <a href="/add_event">
              <b>Add Event</b>    
          </a>
          </div>
          <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <a href="/add_admin">
              <b>Add Admin</b> 
          </a>
          </div>
          <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <a href="/event_registration">
              <b>Registration</b>
          </a>
        </div>        
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
          <form action="/logout" method="get">
            
                <button type="submit" class="btn btn-dark">Log_Out</button>
            
          </form>        
      </div>
          
      </nav>
     </div>      
    </div>
  </div>
    <div class="row p1" >        
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
           
        </div> 
        
        <div class=" col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
            <div class="header">
            <h2>Event Registration</h2>
            </div>
            <div class="row container my-custom-scrollbar">
              <div style="overflow-x:auto;">
            <table class="table table-borderless">             
                <thead>
                  <tr>
                    <th >
                      Name</th>
                    <th >
                      Email</th>
                    <th >
                      Con. Number</th>
                    <th >
                      Address</th>
                    <th >
                      NIC</th>
                    <th >
                      Event Name</th>
                      <th >
                        Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $add_ad)
                  <tr>                    
                    <td>{{$add_ad->name}}</td>
                    <td>{{$add_ad->email}}</td>
                    <td>{{$add_ad->mobile}}</td>
                    <td>{{$add_ad->address}}</td>
                    <td>{{$add_ad->nic}}</td>
                    <td>{{$add_ad->event}}</td>
                    <td>
                      <a href="/delete_reg/{{$add_ad->id}}" >
                        <button type="button" class="btn btn-warning">Delete</button>
                      </a>
                    </td>
                  </tr>
                                  
                </tbody>
                @endforeach
              </table>
            </div>  
          </div>
        
          
        </div>
        
      </div> 
</body>
</html>