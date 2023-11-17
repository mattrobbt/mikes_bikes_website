<?php include("head.php"); ?>

<style>
  
</style>

<div class="container-contact100">
  <form action="https://formspree.io/mwkkkzvp" method="POST" class="form-group form-check col-26 ">
 <div class="row col-80 ">
    <input type="text" placeholder="Name" name="name" class="form-control form-control-lg" size="30" required /><br>
    </div></br>
    <div class="row col-80 ">
    <input type="text" placeholder="Email" name="email" class="form-control form-control-lg" size="30" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required /><br>
     </div></br>
     <div class="row col-80">
    <textarea placeholder="Message" class="form-control form-control-lg" id="validationTextarea" name="Message" rows="10" required></textarea><br>
    </div>
    </br>
    <div class="row col-80">
    <input class="btn btn-primary " type="submit" value="Send email" />
    </div>
  </form>
</div>




<?php include("includes/footer.php"); ?>