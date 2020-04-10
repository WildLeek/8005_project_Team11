<!--this code will insert from the Feedback form to the database -->
<!--and then will show message show that feedback was added -->
<html>
<head>
   
    <!--  By Sami , Friday, 10 April 2020 at 13:00:53 -->
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />

<script>
setTimeout(function () {
   window.location.href= 'index.html'; // the redirect goes here

},7000); // 7 seconds

</script>



</head>
<body>

<?php
    
    //Connect to the database
    include("connection.php");

//Assign S_POST array from the form to variables.

    $feedback=$_POST["feedback"];
   // $name2=$_POST["user "];
  //  $email=$_POST["rank "];
    ?>


<?php
    //SQL query that send form values to the database.

$sql = "INSERT INTO feedbacks (feedback) VALUES ('$feedback')";

    //close the connection with DB
$conn->query($sql);
$conn->close();
    
    
    //show the feedback
    echo  "Feedback:<br>".$feedback."<br> "." added successfully.";

   ?>
  
<p><font color="red">You will be redirected to homepage shortly</p>
</body>
</html>
