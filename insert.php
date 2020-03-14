<!--this code will insert from the regesteration form to the database -->
<!--and then will show message show the name of user added -->
<html>
<body>

<?php

    //Connect to the database
    include("connection.php");
    
//Assign S_POST array from the form to variables.
    $name1=$_POST["firstname"];
    $name2=$_POST["lastname"];
    $email=$_POST["email"];
    $pass=$_POST["Password"];
    $usr=$_POST["UserName"];
    ?>


<?php
    //SQL query that send form values to the database.

$sql = "INSERT INTO customer (FirstName, SureName, email,password,userName) VALUES ('$name1', '$name2', '$email','pass', '$usr')";

    //close the connection with DB
$conn->query($sql);
$conn->close();
    
    
    //show the name of user who recently added
    echo $name1." ".$name2." "."was added successfully.";

    
    //Sami -- Friday, 13 March 2020 at 05:21:52
   ?>
  

</body>
</html>
