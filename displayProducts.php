<html>
<head>
<meta charset="UTF-8">
<title>Display all products </title>

    <link rel="stylesheet" type="text/css" href="StyleSheets/common.css" />
    <link rel="stylesheet" type="text/css" href="StyleSheets/alter_password.css" />
</head>
<body>
<?php
$title="Send Feedback";
include 'dynamicHeader.php';
dynamicHeader ($title);
?>
<p>
<a href="landingPage.php">Back to Homepage</a>
</p>
<?php
    /**
     This code will display products 
     */
    
    //call connection
    include("connection.php");
    
    //SQL query will be saved to  variable called result
    $result = $conn->query("SELECT * FROM products");

//result variable will be iterated  by method fetch saved in variable row

   echo "<ul>";
     while($row = $result->fetch_assoc()) {

         echo "<h3> <li>". $row["name"]."<br>  ".$row["description"]."</li></font><br> </h3>";
     }
     echo "</ul>";
     $conn->close();

     ?>



</body>
</html>




