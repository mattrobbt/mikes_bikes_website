<?php include("head.php"); ?>

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
<body>
</br></br></br></br></br></br></br></br></br>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Contact Us
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
                  
                  <div class="form-group">
                     <textarea type="message" name="message"  class="form-control my-input" id="message" placeholder="Enter Message" rows="6" required></textarea>
                     
                  </div>
                  
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-primary send-button">Send Message</button>
                  </div>
                  
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

</body>
</html>