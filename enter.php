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

    //take the name put it in the session
    $_SESSION["name"]=$row["firstName"];
    //Sami , 5 may 2020

redirectionT();
        $match=true;} 
    }

    if($match==false )
    {redirectionF();} 
        echo "</ul>";

    $conn->close();


function redirectionF(){

echo "
<script> 
alert(\"Email or password is wrong\")
window.location.href = \"../website/signin_form.php\";
</script>";

}


function redirectionT(){
// alert user name from the session . Sami, 5 may 2020
echo "
<script> 
alert(\""."Hello,".$_SESSION["name"]."\")
alert(\"You will go to feedback page.\")
window.location.href = \"../website/toTable.php\";
</script>";

}




/*
Sami Sunday, 3 May 2020 at 20:41:12
*/


    ?>




