<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    
    {{-- custom style --}}
    <link href="simple-sidebar.css" rel="stylesheet">


    <title>Login</title>
</head>
<body>
    <div class="row p1">
        <div class="col-lg-4"></div>
        <div class="col-lg-4" id="login">
          <h2 class="header">Admin Login</h2>
            <form method="POST" action="/admin">
              {{csrf_field()}}
                <div class="container">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="log_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">          
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="log_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/">
                  <button type="button" class="btn btn-dark">Back</button>
                  </a>
                </div>
              </form>
        </div>

    </div>
    
</body>
</html>