<!-- Friday, 13 March 2020 at 02:19:23  --> 
<!-- This is an HTML barebones/very basic form.--> 
<!-- It is modified from Dan examples -->
<!-- Sami -->

<!-- Update 27.03.2020 -->
<!-- Added styles, cleaned up the page -->
<!-- Madina Goigova-->

<html>
<head>
<meta charset="UTF-8">
<title>Cusotmer - Registration</title>

    <link rel="stylesheet" type="text/css" href="StyleSheets/common.css" />
        <link rel="stylesheet" type="text/css" href="StyleSheets/alter_password.css" />
    <style> * {padding: 0px;}</style>
</head>


<body>


   
<?php 
$title="Registration new customer";
include 'dynamicHeader.php';
dynamicHeader ($title);
    ?>



<div class="container">

<a href="landingPage.php">Back to Homepage</a>

<!-- Insertion to insert.php -->
<div class="container">
<form action ="insert.php" method="post" onsubmit="return check();">
    
        <h1>New User</h1>
        <p>
            <label for="firstname">First name: </label> <br>
            <input type="text" name="firstname" id="name1" pattern="[A-Za-z]{3,20}" title="Accept from 3 to 20 characters letters only"><br>

            <label for="lastname">Last name: </label><br>
            <input type="text" name="lastname" id="name2" pattern="[A-Za-z]{3,20}" title="Accept from 3 to 20 characters letters only"><br>
<!-- regex pattern for email and password -->
<!--Sami 3 may 2020 -->

            <label for="email">Email: </label><br>
            <input type="text" name="email" pattern="[a-z0-9]+@[a-z0-9]+\.[a-z]{3,}"
             title="Please enter valed email format abc@abc.abc" id="email"><br>


            <!-- <label for="UserName">Username: </label><br> -->
            <!--  <input type="text" name="UserName"><br> -->
            
            <label for="password">Password: </label><br>
            <input type="password" name="password" pattern="[A-Za-z0-9]{8,8}"
  title="Must be 8 characters ( letters or numbers ) " id="password"><br>

            <button class="registerbtn" type="submit"> Register </button>
        </p>
    
    <div class="linkcontainer">
        <div class="linklist">
            
            <a href="https://my.sage.co.uk/public/login-help/">Need help logging onto My Sage? </a><br />
            <a href="https://my.sage.co.uk/public/product-help/">Sage product help</a><br />


        </div>
    </div>
    
</form>
</div>
</div>
</body>
<script type="text/javascript">
    // Chech that nothing null in the form prior to submit 
    function check()
    {
        

var name1=document.getElementById('name1').value;
var name2=document.getElementById('name2').value;
var email=document.getElementById('email').value;
var password=document.getElementById('password').value;
var submit=false;

if (name1 =="" || name2=="" || email=="" || password=="" ) 
    {alert("There is empty inputs.");

}
else {submit=true;}
        


        return submit;
    }
   
/*


*/
</script>
</html>
    
    
     
    
    