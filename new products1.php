<!--this code will insert new product to the database -->
<!--and then will show message show the name of product added -->
<html>
<body>

<?php

    //Connect to the database
    include("connection.php");
    
//Assign S_POST array from the form to variables.
    $name = safeParse($_POST["productName"]);
    $id = safeParse($_POST["productId"]);
    $description = safeParse($_POST["description"]);
    
   /* $usr=$_POST["UserName"];*/
   
   
//deals with escaping HTML code and any characters that could cause SQL errors.
   function safeParse($conn,$input)
   {
   $input = htmlspecialchars(input);
   $input = $conn->real_escape_string($input);
   
   return $input;
   }
   
    ?>


<?php
    //SQL query that send form values to the database.

$sql = "INSERT INTO product (productName,productId,description) VALUES ('$name', '$id', '$description')";


    //show the name of product which recently added
	if ($conn->query($sql) === TRUE)
	{
    echo $name." "."was added successfully.";
    }
	else
	{
	echo "<p>Error:" . $sql . "<br>" . $conn->error . "</p>";
	}

    
	//close the connection with DB
    $conn->query($sql);
    $conn->close();
    
    
    //show the name of product which recently added
    echo $name." "."was added successfully.";

    
    
   ?>
  

</body>
</html>