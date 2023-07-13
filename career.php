<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .banner{
            background: url('pic3.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 50vh;
            overflow: hidden;

        
        }
        .navbar{
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%; 
        }
        .container .navbar .col-md4{
          width: 30px;
          padding: 10px;
          margin: 10px;

        }


        .card {
     /* Add shadows to create the "card" effect */
     margin:30px 30px 0px 0px;
     box-shadow: 0 10px 10px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      
     }

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 20px 20px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */





    </style>
    <title>Career</title>
</head>
<body>
    <div class="container" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div> 
  </nav> 
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Job Portal</h1>
        <p class="lead">Best Jobs available matching your skills</p>
    </div>
    </div>
    <div class="banner">
    <img src="pic3.jpg" alt="" class="img-fluid">
    
    </div>
</div>


<!-- <div class="nani">
    <h1>Software Developer</h1>
    <h2>Company Name</h2>
    <p?>Im very good at web development and i also had grip On
        some languages like c and python and i also had certifications
        im also good at communication skills.
    </p>
    <h3>Skills Required</h3>
    <h3>Job Location:</h3>
    <h3>CTC:</h3>
</div> -->


<div class="row" style="margin-left:150px">

<?php
  $sql="SELECT `id`,`cname`,`position`, `Jdesc`, `skills`,`CTC` FROM `cdetails`";
  $result = mysqli_query($conn,$sql);
  $i=0;
  if($result->num_rows > 0){


    while($row = $result->fetch_assoc()){
  echo '
  <div class="card" style="width: 18rem; padding-bottom:10px; padding-top:10px; ">
  <div class="jobsContainer" style="text-align:center">
   
      <h3>'.$row['position'].'</h3>
      <h4>'.$row['cname'].'</h4>
      <p style="color:black;">'.$row['Jdesc'].'</p>
      <p style="color:black;"><b>Skills Required:</b>'.$row['skills'].'</p>
      <p style="color:black;"><b>CTC:</b>'.$row['CTC'].'</p>
      <button class="btn btn-primary " type="button" data-toggle="modal" data-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
       Apply Now
  </button>
   </div>
  </div>
  ';
  }}
   ?>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalTitle">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="applySubmit" class="btn btn-primary">Apply</button>
      </div>
     </form>

    </div>
  </div>
</div>





      </div>













<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>