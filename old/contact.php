<?php include ("includes/head.php"); ?>


<style>
#container {
  border-radius: 16px;
  background-color: #f2f2f2;
  padding: 30px;
}
</style> 

<div  class="container" id="container">
<form action="https://formspree.io/mwkkkzvp" method="POST">
<label for="name">Name:</label><br>
<input  type="text" name="name" id="name"  size="30" required /><br>
<label for="email">Email:</label><br>
<input  type="text" name="email" id="email" size="30" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required /><br>
<label for="message">Message:</label><br>
<textarea name="message" rows="10" cols="40" required></textarea><br>
<input type="submit" value="Send email"/>
</form>
 </div>
 

  
<?php include ("includes/footer.php"); ?>
