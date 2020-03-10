<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_form.css">
</head>
<body>
<?php

//login trainees
require('db.php');
session_start();

if (isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `trainess` WHERE username='$username' and password='".md5($password)."'";
//  $query = "SELECT * FROM `trainess` WHERE username='$username' and password='".md5($password)."'";

$result = $con->query($query);

  if($result->num_rows > 0){
    $row = $result->fetch_assoc();

 //   $type = $row['type'];

    $username_t = $row['username'];
  
  $_SESSION['username_t'] = $username_t;
  //$_SESSION['logged'] = true;
  
  //     if( $admin ==='1'){
    //       $_SESSION['admin'] = $admin;
    //     }
    
    header("Location: home.php");
  } else {
    $query = "SELECT * FROM `workshop_provider` WHERE usernamep='$username' and password='$password'";
    $result = $con->query($query);
    
    if($result->num_rows > 0){
      $row = $result->fetch_assoc();
      
      $username_p = $row['usernamep'];

      $_SESSION['username_p'] = $username_p;
    header("Location: home_provider.php");   
    }
    else {
      echo  "
      <span
      id='error-message-login'
      class=' text-danger alert-dark p-1 rounded '
      >Username/password is incorrect !
      </span>
      <p> try again </p> <a href='login.php'> login </a>
      ";
    }
}

// If form submitted, insert values into the database.
// if (isset($_POST['username']) ){
//         // removes backslashes
//  $username = stripslashes($_REQUEST['username']);
//         //escapes special characters in a string
//  $username = mysqli_real_escape_string($con,$username);
//  $password = stripslashes($_REQUEST['password']);
//  $password = mysqli_real_escape_string($con,$password);
//  //Checking is user existing in the database or not
//  $query = "SELECT * FROM `trainess` WHERE username='$username' and password='".md5($password)."'";
//  $result = mysqli_query($con,$query) or die(mysql_error());
//  $rows = mysqli_num_rows($result);
//         if($rows==1){
//      $_SESSION['username'] = $username;
//             // Redirect user to index.php
//      header("Location: index.php");
//          }else{
//  echo "<div class='form'>
// <h3>Username/password is incorrect.</h3>
// <br/>Click here to <a href='login.php'>Login</a></div>";

//  }
    }else{
 ?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<div class="form-style-10">
    <h1>تسجيل دخول</h1>
    
        <div class="section">أسم المستخدم</div>
        <div class="inner-wrap">
           
    
          <label>أسم المستخدم 
          <input type="text" name="username" id="username" required/>
        </label>
			

          <label>كلمةالمرور 
          <input type="password" name="password" id="password" required/></p>
        </label>
        </div>
    
        
          
        
    
        <div class="button-section">
<input name="submit" type="submit" value="Login" />
</form>

</div>
<?php } ?>

<!-- 
// require('db.php');
// session_start();
// if(isset($_POST['usernamep'])){
//         // removes backslashes
//  $usernamep = stripslashes($_REQUEST['usernamep']);
//         //escapes special characters in a string
//  $usernamep = mysqli_real_escape_string($con,$usernamep);
//  $password = stripslashes($_REQUEST['password']);
//  $password = mysqli_real_escape_string($con,$password);
//  //Checking is user existing in the database or not
//  $query = "SELECT * FROM `workshop_provider` WHERE usernamep='$usernamep' and password='".md5($password)."'";
//  $result = mysqli_query($con,$query) or die(mysql_error());
//  $rows = mysqli_num_rows($result);
//         if($rows==1){
//      $_SESSION['usernamep'] = $usernamep;
//             // Redirect user to index.php
//      header("Location: home_provider.php");
//          }else{
//               $_SESSION['usernamep'] != $usernamep;
//  echo "<div class='form'>
// <h3>Username/password is incorrect.</h3>
// <br/>Click here to <a href='login.php'>Login</a></div>";

//  }
//     }else{ -->
 
<!-- // <div class="form">
// <h1>Log In</h1>
// <form action="" method="post" name="login">
// <div class="form-style-10">
//     <h1>تسجيل دخول</h1>
    
//         <div class="section">أسم المستخدم</div>
//         <div class="inner-wrap">
           
    
//           <label>أسم المستخدم 
//           <input type="text" name="usernamep" id="usernamep" required/>
//         </label>
			

//           <label>كلمةالمرور 
//           <input type="password" name="password" id="password" required/></p>
//         </label>
//         </div>
     -->
        
          
        
    
        <!-- <div class="button-section">
<input name="submit" type="submit" value="Login" />
<a href="login.php"></a>
</form>
<p>Not registered yet? <a href='workshopprov.php'>Register Here</a></p>
</div> -->


</body>
</html>