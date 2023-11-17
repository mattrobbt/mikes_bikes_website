<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" type="text/css" href="style.css">

<body>
<nav>
<img id="logo" src="mikesbikes.png" width="10%" height="auto">

<button id="shoppingcart"><img src="shoppingcart.png" width="10%" height="auto"></button>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="store.php">Store</a></li>
  <li><a href="#contact">Repairs</a></li>
  <li><a href="#about">Contact Us</a></li>
</ul>
</nav>
<div>

<?php
$servername = "silva.computing.dundee.ac.uk";
$username = "19ac3u01";
$password = "ac33b2";
$dbname = "19ac3d01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM STOCK";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Brand</th><th>Model</th><th>Price</th><th>Quantity</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "<tr><td>".$row["Brand"]."</td><td>".$row["Model"]."</td><td> ".$row["Price"]."</td><td>".$row["Quantity"]. "</td>";
        echo '<td><img class="bikeimage" src="'.$row['image'].'"></td></tr>';
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>

