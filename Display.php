<html>
<head>
<meta charset="UTF-8">
<title>Display all users </title>

    <link rel="stylesheet" type="text/css" href="StyleSheets/StyleSheet1.css" />

</head>
<body>
<div class = "header">
    <a href="https://my.sage.co.uk/"><img src="Logos/sage-logo.svg" alt="Sage logo"></a>
    <span class="header-text">Display all users</span>
</div>
<?php
    /**
     This code will display first and last names  of useres
     */
    
    //call connection
    include("connection.php");
    
    //SQL query will be saved to  variable called result
    $result = $conn->query("SELECT * FROM customer");

//result variable will be iterated  by method fetch saved in variable row
    echo "<ul>";
    while($row = $result->fetch_assoc()) {

        echo "<h3> <li>". $row["firstName"]."  ".$row["sureName"]."</li></font><br> </h3>";
    }
    echo "</ul>";
    $conn->close();

    ?>


</body>
</html>
