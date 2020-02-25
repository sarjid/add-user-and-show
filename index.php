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
      <div class="col-lg-10 m-auto ">
     

    <table class="table mt-2">
    <div class="mt-5">
    <a href="add.php" class="btn btn-danger">Add User</a>
    </div>
       <thead class="thead-dark">
    <tr>
      <th scope="col">SL No.</th>
      <th scope="col">Username</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
     
    </tr>
  </thead>
  <tbody>
    
  <?php
					$query = ("SELECT * from crud");
          $result = mysqli_query($connection, $query);
          $i = 0;
					while($row = mysqli_fetch_assoc($result)) {
           
            $i++
				?>
    <tr>
      <th scope="row"> <?php echo $i; ?> </th>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['firstname'] ?></td>
      <td><?php echo $row['lastname'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['password'] ?></td>
      
    </tr>
     
    <?php  	}?>
  
    
  </tbody>
</table>
    
    
            </div>
          </div>
    

    </section>


  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
