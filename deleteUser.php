
<html>
<head>
    <?php
$title="Delete user";
     ?>
<meta charset="UTF-8">
<title>Delete user</title>

    <link rel="stylesheet" type="text/css" href="StyleSheets/common.css" /></head>
    <link rel="stylesheet" type="text/css" href="StyleSheets/alter_password.css" />

</head>
<body>
	
  
<?php 
$title="Delete user";
include 'dynamicHeader.php';
dynamicHeader ($title);
    ?>
      <!-- TODO: user and rank should be taken from session and sent from here as well -->
<div class="container">
	

<!--this form will call php file to delete a record-->
<!--deleting will be by user name-->

        <div class="container">
            <form action="delete.php" method="post">
                <p>
                    <label for="user">Email: </label> <br>
                    <input type="text" name="email">
                    <button class="greenbtn" type="submit" onclick="return confirm('Are you sure you wish to remove this user?')">Submit</button>
                </p>
            </form>
        </div>
    </div>
</body>
</html>





	
	