<?php include 'config.php'?>
<?php include 'main.php'?> 
<!-- Page content -->
<div class="mainContainer">
<p>
  <!-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
    <div class="mb-3">
        <label for="Company Name" class="form-label">Company Name</label>
        <input for="text" class="form-control" id="" name="companyName">
    </div>    
    <div class="mb-3">
        <label for="exampleInputPosition" class="form-label">Position</label>
        <input for="text" class="form-control" id="examplePosition" name="Position">
    </div> 
    <div class="mb-3">
        <label for="JobDesc" class="form-label">Job Descripetion</label>
        <input for="text" class="form-control" id="JobDesc" name="jobDescription">
    </div> 
    <div class="mb-3">
        <label for="Skills" class="form-label">Skils Required</label>
        <input for="text" class="form-control" id="Skilss" name="Skills">
    </div> 
    <div class="mb-3">
        <label for="CTC" class="form-label">CTC</label>
        <input for="number" class="form-control" id="CTC" name="CTC">
    </div> 
    <button type="submit" class="btn btn-primary" name="Done">Submit</button>
</form>
</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Developer</td>
      <td>8LPA/td>
    </tr>
    <tr>
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
 <?php
  $sql="SELECT `cname`,`position`,`CTC` FROM `cdetails`";
  $result = mysqli_query($conn,$sql);
  $i=0;
  if($result->num_rows > 0){


    while($row = $result->fetch_assoc()){
  echo" 
    <tr>
      <td>".++$i."</td>
      <td>".$row['cname']."</td>
      <td>" .$row['position']."</td>
      <td>".$row['CTC']."</td>
    </tr>";
  }}
  else{
    echo"";
  }


   ?>


</tbody>

</table>  
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>