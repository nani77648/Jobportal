<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background-image: url('pic2.jpg');
            background-size: cover;
        }
        form{
            margin-top: 6em;
            margin-left: 30em;
            margin-right: 10em;
            padding: 30px;
            box-shadow: 10px 10px 8px 10px #888888; 
            background-color: silver;
            
        }
    </style>
    <title>Register/signUp</title>
</head>
<body>
    <div class="container">
    <form method="POST">
    <div class="form-group">
    <label for="exampleInputName">Full Name</label>
    <input type="ID" class="form-control" id="exampleInputNumber" name="name">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <br>
    Already Registered? <a href="login.php">Login</a>
</form>
    </div>

</body>
</html>