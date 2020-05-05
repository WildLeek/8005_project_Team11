<html>
<head>
      <!-- Sami , Friday, 10 April 2020 at 21:48:06 -->
      <title>
            Add new product
      </title>

    <link rel="stylesheet" type="text/css" href="StyleSheets/common.css" />
    <link rel="stylesheet" type="text/css" href="StyleSheets/alter_password.css" />


</head>
<body>
     
  
<?php 
$title="Add product";
include 'dynamicHeader.php';
dynamicHeader ($title);
    ?>
  
   <div class="container">
<div>

<form action="product.php" method="post">
  <label for="name">Add name of new product</label><br>
  <input type="text" name="name"> <br> 
  <textarea name="description" rows="20" cols="20">Add description</textarea>
  <br>
  <br>
  <input type="submit">
</form>
</div>

</div>

  </body>
  </html>