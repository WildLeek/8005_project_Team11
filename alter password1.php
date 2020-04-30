<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>back end alter_password</title> 
</head> 
<body> 
 <?php
 session_start (); 
 $email = $_REQUEST ["email"]; 
 $oldpassword = $_REQUEST ["oldpassword"]; 
 $newpassword = $_REQUEST ["newpassword"]; 
  
 $con = mysql_connect ( "localhost", "root", "root" ); 
 if (! $con) { 
 die ( '数据库连接失败' . $mysql_error () ); 
 } 
 mysql_select_db ( "Customer", $con ); 
 $email = null; 
 $dbpassword = null; 
 $result = mysql_query ( "select * from Customer where email ='$email';" ); 
 while ( $row = mysql_fetch_array ( $result ) ) { 
 $dbemail = $row ["email"]; 
 $dbpassword = $row ["password"]; 
 } 
 if (is_null ( $dbemail )) { 
 ?> 
 <script type="text/javascript"> 
 alert("The email does not exist"); 
 window.location.href="alter_password.html"; 
 </script> 
 <?php
 } 
 if ($oldpassword != $dbpassword) { 
 ?> 
 <script type="text/javascript"> 
 alert("wrong password"); 
 window.location.href="alter_password.html"; 
 </script> 
 <?php
 } 
 mysql_query ( "update Customer set password='$newpassword' where email='$email'" ) or die ( "Failed to save to database" . mysql_error () );//If the above username and password are right, update to the database 
 mysql_close ( $con ); 
 ?> 
  
  
 <script type="text/javascript"> 
 alert("Password changed successfully"); 
 window.location.href="signin_form.html"; 
 </script> 
</body> 
</html> 
