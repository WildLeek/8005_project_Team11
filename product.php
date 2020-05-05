<!--this code will insert new product to the database -->
<!--and then will show message show the name of product added -->

<!--NOTE-->
<!--This is from TengLu-->
<!-- https://github.com/WildLeek/8005_project_Team11/blob/master/new%20products1.php -->
<!-- adapted by Sami in : Wednesday, 8 April 2020 at 12:52:56 -->

<html>
<head>


<script>
//sami Friday, 10 April 2020 at 21:57:02
setTimeout(function () {
   window.location.href= 'landingPage.php'; // the redirect goes here

},6000); // 6 seconds

</script>

</head>
<body>

<?php

    //Connect to the database
    include("connection.php");
    
//Assign S_POST array from the form to variables.
    $name = $_POST["name"];
    $description = $_POST["description"];
    
    ?>


<?php
    //SQL query that send form values to the database.

$sql = "INSERT INTO products (name,description) VALUES ('$name', '$description')";


   //close the connection with DB
   
    $conn->query($sql);
    $conn->close();
    echo "$name was added successfully";
    

    
	
    
    
   ?>
  
<p><font color="red">You will be redirected to homepage shortly</p>

</body>
</html>
