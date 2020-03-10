
<?php 
      
    require('db.php');
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_form.css">
        <title>Home Page</title>
</head>
<body>
<div class="topnav">
 
    <img src="logo.png" alt="Simply Easy Learning" width="140" height="90">
    <?php

    if(isset($_SESSION["username_t"])){
    echo "Welcome ".$_SESSION["username_t"];
  }
  ?>
  <a href="login.php">دخول</a>
    <a href="registration.php">تسجيل متدربين</a>
    <a href="workshopprov.php">تسجل مقدم ورش عمل</a>
  </div>
  
  <div class="content">
    <h2>CSS Template</h2>
    <p>A topnav, content and a footer.</p>
  </div>
  
  <div class="footer">
    <p>Footer</p>
  </div>
</body>
</html>