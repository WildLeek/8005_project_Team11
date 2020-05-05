
<?php

/*This is a new connection to the local host */
    // you have to obtain the database firstly. then you have to change the connection details to suite your machine.
    // address , user , password , name_DB
 $conn = new mysqli("127.0.0.1", "sami", "sami1990", "sage");
    // Check connection
    if ($conn->connect_error) {
        die("<br><h2> Sorry!  connection failed <br></h2><h2>" . $conn->connect_error);
    }
?>



