<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    
    {{-- custom style --}}
    <link href="simple-sidebar.css" rel="stylesheet">

    <title>Update Event</title>
</head>
<body>
    <div class="row " style=" font-family: Georgia, Times, serif; padding-top: 10%;">
      <div class="col-lg-4"></div>
      <div class="col-lg-6" >
        <div class="row">
          <div class="col-1 col-sm-1"></div>
            <div class="col-10 col-sm-10 col-md-6 col-lg-6 col-xl-6">
              <h3>Update Event</h3>
            </div>          
        </div>
        
        <form action="/update" method="POST">
          {{csrf_field()}}
          <input type="hidden" name="id" class="form-control"  value="{{$data->id}}">
          <div class="row">
            <div class="col-1 col-sm-1"></div>
          <div class="form-group col-10 col-sm-10 col-md-6 col-lg-6 col-xl-6">                
            <input type="text" name="up_event" value="{{$data->event}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Event Name">                           
          </div>
        </div>
          <div class="row">
            <div class="col-1 col-sm-1"></div>
          <div class="form-group col-10 col-sm-10 col-md-6 col-lg-6 col-xl-6">                
            <input type="date" name="up_date" value="{{$data->date}}" class="form-control" id="exampleInputPassword1" placeholder="Date">
          </div>                
        </div> 
        <div class="row">
          <div class="col-1 col-sm-1"></div>  
          <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
            <button type="submit" class="btn btn-info">Update Event</button>
          </div>
          <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 ">
            <a href="/add_event">
            <button type="button" class="btn btn-dark">Back</button>
            </a>
          </div>
        </div>
        </form>
      </div>  
    </div>
</body>
</html>