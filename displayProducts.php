<html>
<head>
<meta charset="UTF-8">
<title>Display all products </title>

    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
</head>
<body>
<div class = "header">
        <a href="index.html"><img src="sage-logo.svg" alt="Sage logo"></a>
    <span class="header-text">Display products</span>
</div>
<p>
<a href="index.html">Back to Homepage</a>
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




