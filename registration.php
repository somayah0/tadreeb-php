<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_form.css">
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con,$username); 
        $fullname = stripslashes($_REQUEST['fullname']);
        //escapes special characters in a string
	$fullname = mysqli_real_escape_string($con,$fullname); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
        $query = "INSERT into `trainess` (username, fullname,password, email)
VALUES ('$username','$fullname', '".md5($password)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
                
                header("Location:index.php ");
        //     echo
        //   "<script> 
        //  alert('تم التسجيل بنجاح');
        //  window.location='index.php';
        //  </script>";
            
           /* "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='index.php'>index</a></div>";*/
        }
    }else{
           // echo $result;


?>
 <div class="content">       
<span id="result"></span>

<form name="registration" action="" method="post">

  <div class="form-style-10">
    <h1>تسجيل متدرب جديد</h1>
    <form>
		<div class="section">	 الأسم الثلاثي  والبريد الإلكتروني</div>
		<div class="section">ارجوا كتابة الأسم بشكل صحيح كما تريد أن يظهر في الشهادة</div>
        <div class="inner-wrap">
           
    
			<label>  الأسم الثلاثي <input type="text" name="fullname" placeholder="أدخل أسمك الثلاثي" 
				id = "fname" required /></label>
				<!--<label><input type= "text" name="fullname" ></label><label><input type= "text" name="fullname" ></label>-->
			

				<label>البريد الالكتروني <input type="email" name="email"  placeholder="أدخل البريد الالكتروني " 
					id = "email" onBlur="checkAvailability_email()"   onfocus="this.value=''"required /></label>
					<span id="E-user-Availability-status"></span>
        </div>
		
		
		
		
        <div class="section" >  أسم المستخدم و كلمة المرور </div>
        <div class="inner-wrap">
			<label>أسم المستخدم <input type="text" name="username" placeholder="أدخل أسم المستخدم " 
				id = "uname"  onBlur="checkAvailability()" onfocus="this.value=''"
				title ="أسم المستخدم يجب أن يكون باللغة الإنجليزية،الرموزالمسموح بها : ـ ."  required /></label>
				<span id="user-Availability-status"></span>
				
				<label>كلمة المرور <input type="password" name="password" placeholder="أدخل كلمة المرور"  required /></label>
			<label>تأكيد كلمة المرور <input type="password" name="password2"  placeholder="أدخل  تأكيد كلمة المرور" validation /></label>
			<span id="confirm_psw"></span>
          
        </div>
    
        <div class="button-section">
        <input type="submit" name="submit" value="Register" />
         <!--<span class="privacy-policy">
         <input type="checkbox" name="field7">You agree to our Terms and Policy. 
         </span>-->
        </div>
    </form>
	</div>
<?php }if(isset($_POST)&& !empty($_POST))
    {


$username=$_POST['username'];
      $email=$_POST['email'];
     $password=$_POST['password'];
     $password2=$_POST['password2'];

     $query_e=" SELECT * FROM trainess WHERE email ='$email'";
    $query_n=" SELECT * FROM trainess  WHERE username =' $username'";
   


    $result_e=$con ->query($query_e) or die($con ->error);
    $result_n=$con ->query($query_n) or die($con ->error);

    $num_e=$result_e->num_rows;
    $num_n=$result_n->num_rows;

    if( $num_e>0 OR $num_n>0)
    {
      if( $num_e>0 AND $num_n>0)
      {
        echo "<script> 
        alert('عذراً يبدو أن  اسم المستخدم او البريد الالكتروني  مستخدم سابقاً');
        window.location='sign_up_trainess.html';
        </script>";
        $con ->close();
      }

      if( $num_e>0)
      {
        echo "<script> 
        alert('عذراً يبدو أن  اسم المستخدم او البريد الالكتروني  مستخدم سابقاً');
        window.location='sign_up_trainess.html';
        </script>";
        $con ->close();
      }

      if( $num_n>0)
      {
        echo "<script> 
        alert('عذراً يبدو أن  اسم المستخدم او البريد الالكتروني  مستخدم سابقاً');
        window.location='sign_up_trainess.html';
        </script>";
        $con ->close();
      }


     }elseif($password !=$password2 && strlen($password >= 8))
    {echo "<script> 
      alert('كلمة المرور غير متطابقة');
      
      window.location='sign_up_trainess.html';
        </script>";exit;
      
        
       }
    }

















 ?>
</body>
</html>