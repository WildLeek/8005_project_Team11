<!doctype html> 
<html> 
<head> 
  <meta charset="UTF-8"> 
  <title>the background of user sign in page</title> 
</head> 
<body> 
  <?php 
    session_start();//Login system opens a session content 
    $email=$_REQUEST["email"];//Get the email in the HTML (by post request) 
    $password=$_REQUEST["password"];//Get the password in the HTML (by post request) 
  
    $con=mysql_connect("localhost","root","root");//connect to mysql datebase，username root ，password root 
    if (!$con) { 
      die('数据库连接失败'.$mysql_error()); 
    } 
    mysql_select_db("Customer",$con);//use Customer table； 
    $dbusername=null; 
    $dbpassword=null; 
    $result=mysql_query("select * from Customer where email ='{$email}' and isdelete =0;");//Find the information corresponding to the email,Isdelete represents the content that has been deleted from the database

    while ($row=mysql_fetch_array($result)) {//while循环将$result中的结果找出来 
      $dbemail=$row["email"]; 
      $dbpassword=$row["password"]; 
    } 
    if (is_null($dbemail)) {//back to the signin_form.html interface when the email does not exist in the database
  ?> 
  <script type="text/javascript"> 
    alert("The email does not exist"); 
    window.location.href="signin_form.html"; 
  </script> 
  <?php 
    } 
    else { 
      if ($dbpassword!=$password){//back to the signin_form.html interface when the password is wrong in the database
  ?> 
  <script type="text/javascript"> 
    alert("wrong password"); 
    window.location.href="signin_form.html"; 
  
  
  </script> 
  <?php 
      } 
    } 
  mysql_close($con);//Close the database connection
  ?> 
</body> 
</html>