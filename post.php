<?php

 if (isset($_POST['register'])) {
  //  Term error 

    if (isset($_POST['username']) && !empty($_POST['username'])) {
      if (preg_match('/^[a-zA-Z\s]*$/', $_POST['username'])) {
        $name = $_POST['username'];
      }else {
      $nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please Use only lower and upper case and space !</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>';
      }
    }else {
    $nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Please Insert Your UserName !</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    }

    // first name 

    if (isset($_POST['first_name']) && !empty($_POST['first_name'])) {

     if (strlen($_POST['first_name']) >=4) {
        $first_name = $_POST['first_name'];
      }else {
      $first_nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Name will be 4 characters or longer then !</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>';
      }
    }else {
    $first_nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Please Insert Your First Name !</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    }


    // last name 


    if (isset($_POST['last_name']) && !empty($_POST['last_name'])) {

      if (strlen($_POST['last_name']) >=4) {
         $last_name = $_POST['last_name'];
       }else {
       $last_nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       <strong>Last Name will be 4 characters or longer then !</strong>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
       </div>';
       }
     }else {
     $last_nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Please Insert Your Last Name !</strong>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
     </div>';
     }


      
  // email validation 

  if (isset($_POST['email']) && !empty($_POST['email'])) {
   
    $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    if (preg_match($pattern, $_POST['email'])) {
      $check_email = $_POST['email'];
      $sql = "SELECT email FROM crud WHERE email = '$check_email' ";
				$result = mysqli_query($connection, $sql);
				if (mysqli_num_rows($result) ) {
					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Your Email Has Already Exists !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
					
				}else {
					$email = $_POST['email'];
				}
     
    }else{
      $emailError =  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Your Email is Not Valid !</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      
    }

  }else{
    $emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Plase input Your Email Address!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    
} //===Email ENd=======


    // password validation 


    // ========== password ========== 
  if (isset($_POST['password']) && !empty($_POST['password'])) {

    // if (strlen($_POST['password']) >=8) {
        if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#",$_POST['password'])) {
          
        // }
      $password = $_POST['password'];
      if (isset($_POST['re-password']) && !empty($_POST['re-password'])) {
        $re_password = $_POST['re-password'];

        if (isset($_POST['password']) && isset($_POST['re-password'])) {

          if ($_POST['password'] == $_POST['re-password']) {
                  
             $lastpass = $_POST['password'];

          }else {
            $re_passError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Your password are not same !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }    
        }
        
      }else{
        $re_passError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please Re type Your Password !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        
      }


     
    }else{
      $passError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Your Password at least one lowercase letter,One Uppercase, one number and Must Be length 8 Characters !</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      
    

    }
        
  
    }else{
    $passError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Please Input Your Password !</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    
    
}

  	  	// insert data into database 

	if (isset($name) && isset($first_name) && isset($last_name) && isset($email) && isset($lastpass)) {

		$password = md5($lastpass);


		$sql = "INSERT INTO crud (username, firstname, lastname, email, password) VALUES ('$name', '$first_name', '$last_name', '$email', '$password')";
		$result = mysqli_query($connection, $sql);
		if ($result) {
			$submitSucc = '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Rigister Succesfully Complete <b><a href="index.php">Show </a> Your Submited Data</b> Now </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
          </div>';
          

		}else {
			$submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Opps Data insert Error ! Try again</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
		}
    	//  Terms and Condition else

		
      
  	}
  
  }
  

  
   

?>
