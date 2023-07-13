<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
} 
echo"";

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['phone_no'];
  $password=$_POST['password'];


  $sql = "INSERT INTO `users`(`Name`, `Email`, `Password`,`phone_no`) VALUES ('$name','$email','$password','$number')";
  echo "res $sql";
  if(mysqli_query($conn,$sql)){
    echo "Record inserted successfully.";
  }else{
    echo "Error: Could not able to execute $sql." .mysqli_error($conn);
  }
}

if(isset($_POST['Login'])){
  session_start();
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query="SELECT * FROM `users` WHERE Email ='$email' AND Password='$password' ";
  echo " query $query ";
  $result= mysqli_query($conn,$query);
  $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
  if(mysqli_num_rows($result)==1){
    header("location:index.php");
  }else{
    $error='emailid or password is incorrect';
  }
}
if(isset($_POST['Done'])){
  $CompanyName=$_POST['companyName'];
  $Position=$_POST['Position'];
  $jobDescription=$_POST['jobDescription'];
  $Skills=$_POST['Skills'];
  $CTC=$_POST['CTC'];

  


  $query="INSERT INTO `cdetails`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$CompanyName','$Position','$jobDescription','$Skills','$CTC')";
  

  if(mysqli_query($conn,$query)){
    // echo "New Jobs Posted";
  }
  else{
    echo "ERROR: Failed to Post Jobs $query." .mysqli_error($conn);
  }
}


if(isset($_POST['applySubmit']))
{

  $name=$_POST['name'];
  $qual=$_POST['qual'];
  $apply=$_POST['apply'];
  $year=$_POST['year'];

  $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply' ,'$qual','$year')";
  mysqli_query($conn,$sql);

  //   echo "New Jobs Posted";
  // }
  // else{
  //   echo "ERROR: Failed to Post Jobs $query." .mysqli_error($conn);
  // }

}




//mysqli_close($conn);
?>

