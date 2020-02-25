<?php

  include 'database.php';
  include 'post.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
      <div class="mt-5">
        <a href="index.php" class="btn btn-primary">Show All User</a>
        </div>
     
        <div class="card mt-2">
      

          <div class="card-header bg-danger text-white">
            Register New User
          </div>
          <div class="card-body">

            
          <?php 
                
                if (isset($submitError)) {
                  echo $submitError;
                }

                if (isset($submitSucc)) {
                  echo $submitSucc;
                }
          
          ?>

            <form action="" method="post">

              
              <!-- =========username ============ -->
              <div class="form-group">
           
                <input type="text" name="username" value="<?php if(isset($name)) echo $name; ?>" placeholder="user Name" class="form-control">   
                
                <?php 
                
                  if (isset($nameError)) {
                    echo $nameError;
                  }
                
                ?>
              </div>
        <!-- =================First Name ========= -->
              <div class="form-group">
        
                <input type="text" name="first_name" value="<?php if(isset($first_name)) echo $first_name; ?>"  placeholder="First Name" class="form-control">      
                
                <?php 
                
                if (isset($first_nameError)) {
                  echo $first_nameError;
                }
              
              ?>
            </div>
              
  <!-- ==============Last Name ================== -->
              <div class="form-group">
        
                <input type="text" name="last_name" value="<?php if(isset($last_name)) echo $last_name; ?>"  placeholder="last Name" class="form-control">     
                
                 
                <?php 
                
                if (isset($last_nameError)) {
                  echo $last_nameError;
                }
                ?>
              </div>


              <div class="form-group">
         
                <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>"  placeholder="Enter Email" class="form-control">

                <?php 
                
                if (isset($emailError)) {
                  echo $emailError;
                }
              
              ?>
                
              </div>
              <div class="form-group">
            
                
                <input type="password" name="password" placeholder="Enter Password" class="form-control">

                
                   
                <?php 
                
                  if (isset($passError)) {
                    echo $passError;
                  }
                
                ?>

              </div>
              <div class="form-group">



                <input type="password" name="re-password" placeholder="Enter Re-Password" class="form-control">
                    
                <?php 
                
                  if (isset($re_passError)) {
                    echo $re_passError;
                  }
                
                ?>              
              </div>

         
				
		
              <div class="form-group ">
              <button id="submit" name="register" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 10px;">Reigister</button>
          
               
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
