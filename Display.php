<html>
<body>
<?php
    /**
     This code will display first and last names  of useres
     */
    
    //call connection
    include("connection.php");
    
    //SQL query will be saved to  variable called result
    $result = $conn->query("SELECT * FROM customer");

//result variable will be iterated  by method fetch saved in variable row

    while($row = $result->fetch_assoc()) {

        echo "<h3>". $row["no"]. "- " . $row["firstName"]."  ".$row["sureName"]." </font><br> </h3>";
    }
    $conn->close();

    ?>


</body>
</html>
