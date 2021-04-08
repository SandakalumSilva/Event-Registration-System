<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    
    {{-- custom style --}}
    <link href="simple-sidebar.css" rel="stylesheet">

    <title>Add_Event</title>
</head>
<body>
      <div class="row p1" > 
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
    <div class="row p1" >        
        <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1" >
            <div style="padding-top: 20%;">            
            </div>  
        </div> 
        
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
            <div class="header">
            <h2>Events</h2>
            </div>
            
            <div class="row container my-custom-scrollbar">
              {{-- <div style="overflow-x:auto;">                            --}}
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Event Name</th>
                          <th scope="col">Event Date</th>
                          <th scope="col">Update</th>
                          <th scope="col">Delete</th>                    
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $add_ad)
                        <tr>   
                          <td>{{$add_ad->event}}</td> 
                          <td>{{$add_ad->date}}</td> 
                          <td>
                            <a href="/update/{{$add_ad->id}}" >
                              <button type="button" class="btn btn-dark">Update</button>
                            </a>  
                          </td>
                          <td>
                            <a href="/delete/{{$add_ad->id}}" >
                              <button type="button" class="btn btn-warning">Delete</button>
                            </a>
                          </td>                    
                        </tr>                                 
                      </tbody>
                      @endforeach
                    </table>
              {{-- </div> --}}
            </div>  
            <br><br>  

              <h3>Add Event</h3>
              <form action="/save_event" method="POST">
                {{csrf_field()}}
                <div class="row">
                <div class="form-group col-lg-6">                
                  <input type="text" name="event_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Event Name"> 
                  <span style="color: red"><b>@error('add_name'){{$message}}@enderror</b> </span>               
                </div>
                <div class="form-group col-lg-6">                
                  <input type="date" name="event_date" class="form-control" id="exampleInputPassword1" placeholder="Date">
                </div>                
              </div> 
                                        
              <button type="submit" class="btn btn-info">Add Event</button>
              </form>
        
          
      </div>
        
      </div>
</body>
</html>