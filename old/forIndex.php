<?php

session_start();

require("includes/dbconnect.php");

if (isset($_SESSION['user_id'])) {
  $records = $conn->prepare('SELECT CustomerID,Email,password FROM customers WHERE Email = :Email');
  $records->bindParam(':CustomerID', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = NULL;

  if (count($results) > 0) {
    $user = $results;
  }
}

?>

<?php if (!empty($user)): ?>
<br/> Welcome <?= $user['email']; ?>
<a href="logout.php">Logout?</a>
<?php else: ?>

    <h1>Please Login or Register</h1>
    <a href="login.php">Login</a> or
    <a href="register.php">Register</a>

<?php endif; ?>