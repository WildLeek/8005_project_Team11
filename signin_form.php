
<!-- Madina Goigova 29.03.2020 1400-->
<!-- Signin form-->



<html>
<head>
    

    <meta name="viewpoint" content="width=device-width, " charset="UTF-8">
    <title>Cusotmer - Login</title>
    <link rel="stylesheet" type="text/css" href="StyleSheets/common.css" />
        <link rel="stylesheet" type="text/css" href="StyleSheets/alter_password.css" />



</head>



<body>
      
<?php 
$title="Sign in";
include 'dynamicHeader.php';
dynamicHeader ($title);
    ?>
       

<div class="container"> <p>
<a href="landingPage.php">Back to Homepage</a>
</p>
        <!-- ToDo lookup the user to sign in -->
        <!-- Apply session - logging in 
        Sami, Saturday, 2 May 2020 at 06:52:44 -->

        <form action="enter.php" method="post"  onsubmit="return alert('You will be redirected now');">
            <div class="container">
                <h1>Log In</h1>
                <p>
                    <label for="email">Email: </label><br>
                    <input type="text" placeholder="Enter Email" name="email"><br>

                    <label for="Password">Password: </label><br>
                    <input type="password" placeholder="Enter Password" name="password"><br>

                    <button class="greenbtn" type="submit"> Log In </button>
                </p>
            </div>

            <div class="linkcontainer">
                <div class="linklist">

                    <a href="https://my.sage.co.uk/public/login-help/">Need help logging onto My Sage? </a><br />
                    <a href="https://my.sage.co.uk/public/product-help/">Sage product help</a><br />

                    <!--MG TODO input the registration page address-->
                    <h6> Register new user?</h6>
                    <a href="Regesteration_form.html">Sign Up</a>
                    <br />
                   
                </div>
            </div>
                        </form>
</div>

        

</body>
</html>
