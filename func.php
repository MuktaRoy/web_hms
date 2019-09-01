<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'user_registration');

if(isset($_POST['pat_submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $docapp=$_POST['docapp'];
 
  $query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
  $result=mysqli_query($con,$query);
  if( $result)
  {
  echo "<script>alert('Appoinment registered.')</script>";
  echo "<script>window.open('home.php','_self')</script>";
  
  }
  
}

function get_patient_details()
{
    
    global $con;
    $query="select * from doctorapp";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        $fname=$row['fname'];
         $lname=$row['lname'];
         $email=$row['email'];
         $contact=$row['contact'];
         $docapp=$row['docapp'];
        
        echo "<tr>
      
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
    <td>$contact</td>
        <td>$docapp</td>
    </tr>";
    }
}



?>