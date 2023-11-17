
<?php include("head.php");  ?>


<div class="options">
<form action="" method="post" id="searchform2">
<h1>Sort By:</h1>
        <input type="radio" name="sort" value="popular" > Popular </input></br>
        <input type="radio" name="sort" value="hprice"> High Price </input></br>
        <input type="radio" name="sort" value="lprice"> Low Price </input></br>
        
        <input type="submit" id="searchsubmit2" class="search-submit" value="Search" name="chkdata" />
</form>
</div>

<?php

    
        
        if($_POST['sort'] == "popular"){
            $_POST['sort'] = "SELECT * FROM STOCK";   
            call_database();
            
}
        else if($_POST['sort'] == "hprice"){
            $_POST['sort'] = "SELECT * FROM STOCK ORDER By Price DESC";  
            call_database(); 
}
        else if($_POST['sort'] == "lprice"){
            $_POST['sort'] = "SELECT * FROM STOCK ORDER By Price ASC";  
            call_database(); 
}
        else{
            $_POST['sort'] = "SELECT * FROM STOCK";
            call_database();
        }

        

     
function call_database(){  
        include ("includes/dbconnect.php");  
       
        session_start();      
            $sql = $_POST['sort'];
            $result = $conn->query($sql);  
            if ($result->num_rows > 0) {    
                while($row = $result->fetch_assoc()) {                    
                    echo "<a class='bikebutton' href='productpage.php?clicked=".$row['ProductCode']."'>
                    <img class='bikeimage' src=".$row['image'].">
                    <p class='queryobject'>
                    ".$row["Brand"]." ".$row["Model"].
                    "  </br>£".$row["Price"].
                    "</p></a>";
                    $_SESSION['clicked'] = $row["ProductCode"];   
                }
            }
}
            
    $conn->close();
      ?>
</body> 

</html>

