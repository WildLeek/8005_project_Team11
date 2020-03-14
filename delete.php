<!--This PHP code should delete a record from a database based on user name.-->




<?php

    //Connect to the database
    include("connection.php");
    
    
    //assign to php variable
    $user=$_POST["user"];
 
    
    
    //SQL query that delete form the database.
    $sql = "DELETE FROM customer WHERE userName='$user'";

    $conn->query($sql);
    
    //close the connection with DB
$conn->close();

    echo $user." "."was deleted successfully.";
    
    //Sami-- Friday, 13 March 2020 at 06:50:34
   ?>
  

