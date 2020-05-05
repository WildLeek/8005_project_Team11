<html>
<head>
      <!-- Sami , Friday, 10 April 2020 at 13:51:16 -->

      <title>
            Send Feedback
      </title>
    <link rel="stylesheet" type="text/css" href="StyleSheets/common.css" />
        <link rel="stylesheet" type="text/css" href="StyleSheets/alter_password.css" />


  </head>
<body>
  
<?php 
$title="Send Feedback";
include 'dynamicHeader.php';
dynamicHeader ($title);
    ?>
      <!-- TODO: user and rank should be taken from session and sent from here as well -->
<div class="container">
<form action="insertFeedback.php" method="post">
  <textarea name="feedback" rows="20" cols="50"> Put your feedback here
  </textarea>
  <br>
  <input type="submit">
</form>

</div>

     

  </body>
  </html>
