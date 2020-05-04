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
    ?>


<?php 
// Sami , Monday, 4 May 2020 at 01:35:12
$result = $conn->query("SELECT * FROM customer where email='$email'");

if (mysqli_num_rows($result) >0) {echo "Sorry , This email is exist already \t-\t";
print_r(mysqli_num_rows($result));

}
        

else {

  echo "<br />";

          
            $sql = "INSERT INTO customer (FirstName, SureName, email,password) VALUES ('$name1', '$name2', '$email','$pass')";

                    echo $name1." ".$name2." "."was added successfully.";

                $conn->query($sql);
                $conn->close();
               
                    }

    

   ?>
  
<p><font color="red">You will be redirected to homepage shortly</p>
</body>
</html>
