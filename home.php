<?php

session_start();
if(!isset($_SESSION['username']))
{
    
    header('location:login.php');
}


?>

<html>

<head>
    
    <title>Home Page</title>
    
     <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    </head>
    <body>

        
       <div class="jumbotron" style="background:url('image.jpg') no-repeat;background-size:cover;height:300px;"></div> 
        
        
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            <div class="list-group">
                <a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB">Patient</a> 
                <a href="patient_details.php" class="list-group-item">Patient Details</a>
                <a href="" class="list-group-item">Add New Patient</a> 
                <a href="" class="list-group-item">Payment Method</a> 
                <a href="" class="list-group-item">Released Patients List</a> 
                   
            </div>
                <hr>
                        <div class="list-group">
                <a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB">Staff</a> 
                <a href="" class="list-group-item">Staff Details</a>
                <a href="" class="list-group-item">Add New Staff</a> 
                <a href="" class="list-group-item">Payment Method</a> 
                <a href="" class="list-group-item">Removed Staff Members</a> 
                   
            </div>
            </div>
            <div class="col-md-8">
            
            <div class="card">
            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                
            <h3>Create an Appoinment!</h3>    
            </div>
            <div class="card-body">
                
              <form class="form-group" action="func.php" method="post">
                
              <label>First Name :</label>
              <input type="text" name="fname" class="form-control"><br>
                  
              <label>Last Name :</label>
              <input type="text" name="lname" class="form-control"><br>

              <label>Email Id :</label>
              <input type="text" name="email" class="form-control"><br>
              <label>Contact :</label>
              <input type="text" name="contact" class="form-control"><br>
              <label>Doctor Appointment :</label>
              <select class="form-control" name="docapp">
                     <option value="Dr Sharma from 6pm to 8pm">Dr Sharma from 6pm to 8pm</option>
                     <option value="Dr Shetty from 4pm to 6pm">Dr Shetty from 4pm to 6pm</option>
              </select><br>
                  <input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">
                </form>  
                
            </div>
                
            </div>
            </div>
            <div class="col-md-1"></div>
        
        </div>
        </div>
        
        
        
        
        
        
        

    </body>
    
</html>