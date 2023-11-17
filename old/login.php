

<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header("Location: /");
}

require 'includes/dbconnect.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) :
  $records = $conn->prepare('SELECT CustomerID,Email,password FROM customers WHERE Email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {

    $_SESSION['user_id'] = $results['id'];
    header("Location: /");
  } else {
    $message = 'Sorry, those credentials do not match';
  }
endif;

?>

<!-- Need to still center the logo here but cba atm -->
<div id="loginFormDiv" class="container">
  <form class="form-signin" action="login.php" method="POST">
    <img class="mb-4" src="mikesbikes.png" alt="MikesBikes logo" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Log in here</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="you@exmaple.com" required autofocus>
    <label for="inputPass" class="sr-only">Password</label>
    <input type="password" id="inputPass" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
  </form>
</div>
