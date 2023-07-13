<?php include 'main.php'?>
<?php include 'config.php'?>
<div class="jobs-content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate's Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <tbody>


  <?php


$sql="Select name,apply,year from candidates";
$result=mysqli_query($conn,$sql);
$i=0;
if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){
echo '
<tr>
<th scope="row">'.++$i.'</th>
<td>'.++$row['name'].'</td>
<td>'.++$row['apply'].'</td>
<td>'.++$row['year'].'</td>
</tr>';

  }}
  else{
    echo "";
  }

   ?>




    <!-- <tr>
      <th scope="row">1</th>
      <td>Murali</td>
      <td>Software Developer</td>
      <td><a href=""></a></td>
    </tr> -->
    <!-- <tr>
      <th scope="row">2</th>
      <td>Infosys</td>
      <td>Web Developer</td>
      <td>7.5LPA</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Google</td>
      <td>Digital Marketing</td>
      <td>12LPA</td>
    </tr> -->
  </tbody>
</table>  

</div>
