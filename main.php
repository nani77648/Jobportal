
<?php
$loc=$_SERVER['REQUEST_URI']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css" integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
     <style>



/* The side navigation menu */
.sidenav {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidenav a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidenav a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidenav a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidenav {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidenav a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidenav a {
    text-align: center;
    float: none;
  }
}









       
  
  /* Style page content */
  .mainContainer ,.jobs-content{
    margin-left: 200px; /* Same as the width of the sidebar */
    padding: 1px 16px;
    height: 1000px;
    
  }
  
  /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
  @media screen and (max-height: 300px) {
    .sidenav {padding-top: 10px;}
    .sidenav a {font-size: 13px;}
  }



  
  /* Style the navigation bar */
.navbar {
  width: 100%;
  background-color: #f1f1f1;
  overflow: auto;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #555;
  color: white;
}

/* Current/active navbar link */
.active {
  background-color: #04AA6D;
  color: white;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}



   
  
    </style>

    <title>Dashboard</title>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
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
<!-- Side navigation -->
<div class="sidenav">
  <a class="<?php  ($loc == "/index.php" ? "active" : "");     ?>" href="index.php">Jobs</a>
  <br>
  <a  class="<?php ($loc == "/jobs.php" ? "active" : "");  ?>"  href="jobs.php ">Candidates Applied</a>
  <br>
  <a class="<?php echo ($page == "Contact" ? "active" : "")?>" href="#contact ">Contact</a>
  <br>
  <a  class="<?php echo ($page == "About" ? "active" : "")?>" href="#about">About</a>
</div>