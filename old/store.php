<style>
#storebutton{
    font-weight: bold;
    
}
html
 body {
        overflow-y: hidden;
        
        position: relative; overflow-y: scroll; 
    }
</style>
<?php include ("includes/head.php"); ?>

        <div class="storemain">

        <?php include ("includes/dbconnect.php"); ?>

        <?php

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