<?php include("head.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Request Repair</title>
</head>
	

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
<body>
</br></br></br></br></br></br></br></br></br>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Request Repair
            </h1>
            
         </div>
      </div>
      
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="" method="post" name="login">
                  <div class="form-group">
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Name" required>
                  </div>
				  <div class="form-group">
                     <input type="text" name="surname"  class="form-control my-input" id="surname" placeholder="Surname" required>
                  </div>
				  
                  <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email" required>
                  </div>
                  
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-primary send-button">Send Message</button>
                  </div>
                  
                  
                  <p class="small mt-3">Send us message and we will respond in 7 days <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

</body>
</html>