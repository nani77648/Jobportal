<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysql_connect($server,$userame,$password,$database);

if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
} 
echo"";

is(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['post_no'];
  $password=$_POST['password'];


  $sql = "INSERT INTO `jobs`(`Name`, `Email`, `Password`,'phone_no') VALUES ('$name','$email','$password','$number')";
  if(mysqli_query($conn,$sql)){
    echo "Record inserted successfully.";
  }else{
    echo "Error: Could not able to execute $sql." .mysqli_error($conn);
  }
}
session_start();
if(isset($_POST['Login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query="SELECT * FROM jobs WHERE 'email'='$email' AND 'password'='$password'";
  $result= mysqli_query($conn,$query);
  $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
  if(mysqli_num_rows($result)==1){
    main("location:index.php")
    
  }
  else{
    $error='emailid or password is incoorect';
  }
}
mysqli_close($conn);
?>

