<?php 
      
    require('db.php');
    session_start();

?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_form.css">

        <title>home page provider</title>
        
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

</head>
<body>

    <body>
        <div class="topnav">
           <img src="logo.png" alt="Simply Easy Learning" width="120" height="outo" align="center" >
           <?php

if(isset($_SESSION["username_p"])){
echo "Welcome ".$_SESSION["username_p"];
}
?>
           <a href="workshop.html"> إنشاء الإعلان</a>
         <a href="formchangepass.html">تغيير كلمة المرور</a>
          </div>
          <div class="content">       
<span id="result"></span>

<div class="form">
<!-- <p>Welcome <?php echo $_SESSION['usernamep']; ?>!</p> -->
<p>This is secure area.</p>

<a href="logout.php">Logout</a>
</div>

 
  
  <div class="form-style-10">
  <div class="content">
    <table border="0">

       <caption>إعلاناتي</caption>
        <thead>
            
            <tr><th>
            <form>
                <input type="radio" name="ads" >تطوير الذات<br>
                <input type="radio" name="ads" >تطوير الذات
              </form>
            </th></tr>
           
        </thead>

       
    </table>
  </div>

<div class="button-section">
    <input type="submit" name="edit" value="تعديل"/>
    <input type="submit" name="delete" value="حذف"/>
    </div>
</form>
</div>
  <div class="footer">
    <p>Footer</p>
  </div>
</body>
</html>