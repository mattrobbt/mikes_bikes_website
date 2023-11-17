<html>


<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            padding: 50px;
        }
    </style>
</head>
<?php include ("includes/dbconnect.php");
            $sql = "SELECT * FROM STOCK";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                $count=0;
                while($row = $result->fetch_assoc()) {  
                
                ?>

     <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                        src="echo .$row['image']. ; " preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" >
                        <title>Placeholder</title>
                        
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </img>
                    
                   
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary"></button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
 
<?php
            }
              
            }
            $conn->close();
        ?>


</html>