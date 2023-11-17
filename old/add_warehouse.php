<?php include ("includes/head.php"); ?>

<form method="post">
    Warehouse Name: <input type="text" name="whname">
    Location: <input type="text" name="whlocation">
    <input type="submit" name="submit" value="Insert">
</form>

<?php include ("includes/dbconnect.php"); ?>

<?php 
    if (isset($_POST['submit'])) {
        $whname = $_POST['whname'];
        $whlocation = $_POST['whlocation'];

        $query = mysql_query("INSERT INTO warehouse(warehousewame, location) values ('$whname', '$whlocation')");
    }

    $conn->close();
?>