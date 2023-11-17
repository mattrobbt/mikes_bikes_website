<?php include("head.php"); ?>


        <div class="storemain">

        <?php include ("includes/dbconnect.php"); ?>

        <?php
		session_start();
			$clicked=$_GET['clicked'];
			
			
			
            $sql = "SELECT * FROM STOCK WHERE ProductCode = '$clicked'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                $count=0;
                while($row = $result->fetch_assoc()) {                    
                    echo "<img class='productpage_image' src=".$row['image']."><p class='productpage_text'>".$row["Brand"]." ".$row["Model"]."  </br>£".$row["Price"]."</p>";
       
                }
              
            }
            $conn->close();
        ?>
		<button class="btn btn-primary btn-lg float-right " >Add To Cart</button>
        </div>
    </body>
</html>