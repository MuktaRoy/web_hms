<html>
<head>
        <title>Patient_Details</title>
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

<body>

<?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
    $contact=$_POST['search'];
    $query="select * from doctorapp where contact='$contact'";
    $result=mysqli_query($con,$query);
    echo "<div class='container-fluid' style='margin-top:50px;'>
    <div class ='card'>
    <div class='card-bpdy'><a href='patient_details.php' class='btn btn-light'>Back</a></div>
    <img src='1.jpg.jpg' class='card-img-top'>
    <div class='card-body' style='background-color:#3498DB;color:#ffffff;'> 
        <table class='table table-hover'>
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email id</th>
      <th>Contact</th>
      <th>Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>
    ";
    while($row=mysqli_fetch_array($result)){
        $fname=$row['fname'];
         $lname=$row['lname'];
         $email=$row['email'];
         $contact=$row['contact'];
         $docapp=$row['docapp'];
         echo " <tr>
       <td>$fname</td>
       <td>$lname</td>     
       <td>$contact</td>
       <td>$email</td>
       <td>$docapp</td>
    </tr>";
        }
         echo "</tbody></table></div></div></div>";
   
}

?>
    
    </body>
</html>