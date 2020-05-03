<!--this code will insert from the regesteration form to the database -->
<!--and then will show message show the name of user added -->
<html>
<head>
   
    <!--  29 Mar 2020 -->
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />



<script>
//sami 29 mar 2020 10:30pm
setTimeout(function () {
   window.location.href= 'index.html'; // the redirect goes here

},4000); // 5 seconds

</script>



</head>
<body>

<?php
    
    
    
    //Connect to the database
    include("connection.php");
    
//Assign S_POST array from the form to variables.
    $name1=$_POST["firstname"];
    $name2=$_POST["lastname"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
   /* $usr=$_POST["UserName"];*/
    ?>


<?php
    //SQL query that send form values to the database.
//Fix pass bug! 
//Sunday, 3 May 2020 at 20:21:26
$sql = "INSERT INTO customer (FirstName, SureName, email,password) VALUES ('$name1', '$name2', '$email','$pass')";

    //close the connection with DB
$conn->query($sql);
$conn->close();
    
    
    //show the name of user who recently added
    echo $name1." ".$name2." "."was added successfully.";

    
    //Sami -- Friday, 13 March 2020 at 05:21:52
    //--------
   

   ?>
  
<p><font color="red">You will be redirected to homepage shortly</p>
</body>
</html>
