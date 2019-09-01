<!DOCTYPE html>
<?php include ("func.php"); ?>
<html>
    <head>
        <title>Patient_Details</title>
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    
    
    <body>
    
     
       <div class="jumbotron" style="background:url('image.jpg') no-repeat;background-size:cover;height:300px;"></div> 
        <div class="container-fluid">
        <div class="card">
          <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
              <div class="row">
              <div class="col-md-1">
              <a href="home.php" class="btn btn-light">Back</a>
              </div>
              <div class="col-md-3"><h3>Patient Details</h3></div>
              <div class="col-md-8">
                  <form class="form-group" action="patient_search.php" method="post">
                  <div class="row">
                      <div class="col-md-10">
                      
                          <input type="text" name="search" class="form-control" placeholder="Enter contact"></div>
                      <div class="col-md-2">
                      <input type="submit" name="patient_search_submit" class="btn btn-light" value="Search">
                    </div>
                      </div>
                      
                  
                  </form>
                  
              </div>
              </div>
            </div>
                  
          <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         
        <table class="table table-hover">
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
    
      <?php get_patient_details();
      ?>
    
  </tbody>
</table>
</div>
        
            
            
            
            
            
        </div>
        
        </div>
    
    
    
   
        
        
        
        
        
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>



</html>