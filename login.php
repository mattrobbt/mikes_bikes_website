<?php
include("head.php"); 
session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}
    

include ("includes/dbconnect.php");

$message = '';

// IF user has entered some details to be registered with
if (!empty($_POST['email']) && !empty($_POST['password'])):


    // BEFORE THIS WE NEED TO HASH THE PASSWORDS
    // This script IS NOT secure at this time

    // Enter the new user in the database
	$sql = "INSERT INTO customers (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

	if( $stmt->execute() ):
		$message = 'Successfully created new user';
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;

endif;
?>

<body>
	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
<body>
</br></br></br></br></br></br></br></br></br>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Login
            </h1> 
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="" method="post" name="login">
                  <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password"  class="form-control my-input" id="password" placeholder="Password">
                  </div>
                  
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-primary send-button">Create Account</button>
                  </div>          
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

</body>
</html>