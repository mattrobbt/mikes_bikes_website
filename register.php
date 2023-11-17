<?php include("head.php"); 
session_start();
?>
	
<body>
</br></br></br></br></br></br></br></br></br>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Register Now
            </h1> 
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="" method="post" name="login">
                  <div class="form-group">
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Name">
                  </div>
				  <div class="form-group">
                     <input type="text" name="surname"  class="form-control my-input" id="surname" placeholder="Surname">
                  </div>
				  <div class="form-group">
                     <input type="date" name="DOB"  class="form-control my-input" id="DOB" placeholder="DOB">
                  </div>
				  <div class="form-group">
                     <input type="text" name="address"  class="form-control my-input" id="adress" placeholder="Address">
                  </div>
                  <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <input type="number" min="0" name="number" id="number"  class="form-control my-input" placeholder="Phone Number">
                  </div>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-primary send-button">Create Account</button>
                  </div>

                  <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

<?php
if( isset($_SESSION['user_id']) ){
	header("Location: /");
}
include ("includes/dbconnect.php");
$message = '';
// IF user has entered some details to be registered with

    // BEFORE THIS WE NEED TO HASH THE PASSWORDS
    // This script IS NOT secure at this time

    // Enter the new user in the database
	$sql = "INSERT INTO customers (name,surname,DateOfBirth,TelNo,email, password) VALUES (:name,:surname,:DOB,number,:email,:password)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':name', $_POST['name']);
	$stmt->bindParam(':surname', $_POST['surname']);
	$stmt->bindParam(':DOB', $_POST['DOB']);
	$stmt->bindParam(':number', $_POST['number']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
	echo ':email';
	if( $stmt->execute() ):
		echo $message = 'Successfully created new user';
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;



$conn->close();
?>
</html>