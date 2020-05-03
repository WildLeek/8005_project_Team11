<?php 
session_start();
   //Login system opens a session content

// var_dump($_POST);

   $_SESSION["email"]=$_POST["email"];
   $_SESSION["password"]=$_POST["password"];

// var_dump($_SESSION);

     $email=$_SESSION["email"];
     $password=$_SESSION["password"];




include("connection.php");
    
    $result = $conn->query("SELECT * FROM customer where email='$email'  AND password='$password' ");
    
    echo "<ul>";


    while($row = $result->fetch_assoc()) 
    {
    $match=false;
    if($row['email'] != "" )
    {echo "<li>"."Hello, ". $row["firstName"]."  ".$row["sureName"]."</li>";
        $match=true;} 
    }

    if($match==false )
    {redirection();} 
        echo "</ul>";

    $conn->close();


function redirection(){

echo "
<script> 
alert(\"Email or password is wrong\")
window.location.href = \"/../sage/signin_form.html\";
</script>";

}

/*
Sami Sunday, 3 May 2020 at 20:41:12
*/


    ?>



