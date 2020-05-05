

<?php

/*This is a new connection to the local host */
    // you have to obtain the database firstly. then you have to change the connection details to suite your machine.
    // address , user , password , name_DB
 $conn = new mysqli("127.0.0.1", "root", "sami1989", "sagefeedback");
    // Check connection
    if ($conn->connect_error) {
        die("<br><h1> Hi!, <br> Connection failed: <br></h1><h2>" . $conn->connect_error);
    }
?>



