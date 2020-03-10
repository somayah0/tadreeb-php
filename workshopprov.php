<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_form.css">
        <title>provider</title>
</head>
<body>

<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['usernamep'])){
        // removes backslashes
	$usernamep = stripslashes($_REQUEST['usernamep']);
        //escapes special characters in a string
        $usernamep = mysqli_real_escape_string($con,$usernamep); 
        $department_name = stripslashes($_REQUEST['department_name']);
        //escapes special characters in a string
	$department_name = mysqli_real_escape_string($con,$department_name); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
        $query = "INSERT into `workshop_provider` (usernamep, department_name,password, email)
VALUES ('$usernamep','$department_name', '".md5($password)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo
          "<script> 
        alert('تم التسجيل بنجاح');
        window.location='home_provider.php';
        </script>";
            
           /* "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='index.php'>index</a></div>";*/
        }
    }else{
?>

<div class="content">       
<span id="result"></span>

<form  method="post"  action="">
  <div class="form-style-10">
    <h1>تسجيل مقدم ورشة العمل</h1>
    <form>

 

        <div class="section">أسم الجهة</div>
        <div class="inner-wrap">
            <label>أختيار أسم الجهة</label>
<select name=department_name > <option value=""></option>
  <option value="عمادة التقويم والجودة">عمادة التقويم والجودة</option>
  <option value="عمادة تقنية المعلومات">عمادة تقنية المعلومات</option>
  <option value="عمادة تطوير المهارات">عمادة تطوير المهارات</option>
 <option value="مركز التخطيط الاستراتيجي">مركز التخطيط الاستراتيجي</option>
 <option value="مركز الدراسات والمعلومات">مركز الدراسات والمعلومات</option>
 <option value="الاداره العامة للامن والسلامه">الاداره العامة للامن والسلامه</option>
 <option value="المعهد العالي للقضاء">المعهد العالي للقضاء</option>
 <option value="كلية الشريعة">كلية الشريعة</option>
 <option value="كلية اللغه العربيه">كلية اللغه العربيه</option>
 <option value="كلية أصول الدين">كلية أصول الدين</option>
 <option value="كلية العلوم الاجتماعيه">كلية العلوم الاجتماعيه</option>
<option value="المعهد العالي لدعوة والاحتساب">المعهد العالي لدعوة والاحتساب</option>
<option value="كلية اللغات والترجمة">كلية اللغات والترجمة</option>
<option value="كلية الاعلام والاتصال">كلية الاعلام والاتصال</option>
<option value="معهد تعليم اللغة العربية">معهد تعليم اللغة العربية</option>
<option value="كلية الاقتصاد والعلوم الادارية">كلية الاقصتاد والعلوم الادارية</option>
<option value="كلية علوم الحاسب والمعلومات">كلية علوم الحاسب والمعلومات</option>
<option value="كلية الطب">كلية الطب</option>
<option value="كلية العلوم">كلية العلوم</option>
<option value="كلية التربية">كلية التربية</option>
<option value="عمادة شؤون الطالبات">عمادة شؤون الطالبات</option>
<option value="عمادة البرامج التحضيرية">عمادة البرامج التحضيرية</option>
<option value="عمادة القبول والتسجيل">عمادة القبول والتسجيل</option>
<option value="عمادة التعليم الالكتروني والتعليم عن بعد">عمادة التعليم الالكتروني والتعليم عن بعد</option>
<option value="عمادة البحث العلمي">عمادة البحث العلمي</option>
<option value="معهد الملك عبدالله للترجمة والتعريب">معهد الملك عبدالله للترجمة والتعريب</option>
<option value="عمادة شؤون المكتبات">عمادة شؤون المكتبات</option>
<option value="مركز خدمة المجتمع والتعليم المستمر">مركز خدمة المجتمع والتعليم المستمر</option>
<option value="مركز دراسات سوق العمل">مركز دراسات سوق العمل</option>
<option value="عمادة الابتكار وريادة الاعمال">عمادة الابتكار وريادة الاعمال</option>
<option value="معهد الامير نايف للبحوث والخدمات الاستثمارية">معهد الامير نايف للبحوث والخدمات الابتكارية</option>
<option value=""></option>
<option value=""></option>
<option value=""></option>

</select>
    
            
            
		</div>
		
		<div class="section">أسم المستخدم </div>
        <div class="inner-wrap">
            <label>أسم المستخدم <input type="text" name="username" 
>
 </label>
    
            
        </div>
    
        <div class="section">  البريد الكتروني للجهه الرسمية </div>
        <div class="inner-wrap">
<!--<p>يرجاء كتابة الايميل الرسمي للمؤسسة المنتهي 
@imamu.edu.sa</p>-->
            <label>البريد الكتروني <input name="email" type="email" placeholder="example@imamu.edu.sa" 
 pattern=".+@imamu.edu.sa">


</label>
           
        </div>
     <div class="section">رمز المرور </div>
            <div class="inner-wrap">
            <label>رمز المرور <input type="password" name="password" required /></label>
            <label>تأكيد رمز المرور <input type="password" name="password2" validation /></label>
        </div>
        <div class="button-section">
         
        <input type="submit" name="submit" value="Register" />
         <!--<span class="privacy-policy">
         <input type="checkbox" name="field7">You agree to our Terms and Policy. 
         </span>-->
        </div>
    </form>
    </div>

    <?php }?>

    <?php /*if(isset($_POST)&& !empty($_POST))
    {


$username=$_POST['usernamep'];
      $email=$_POST['email'];
     $password=$_POST['password'];
     $password2=$_POST['password2'];

     $query_e=" SELECT * FROM workshop_provider WHERE email ='$email'";
    $query_n=" SELECT * FROM workshop_provider  WHERE usernamep =' $usernamep'";
   


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
        window.location='workshopprov.php';
        </script>";
        $con ->close();
      }

      if( $num_e>0)
      {
        echo "<script> 
        alert('عذراً يبدو أن  اسم المستخدم او البريد الالكتروني  مستخدم سابقاً');
        window.location='workshopprov.php';
        </script>";
        $con ->close();
      }

      if( $num_n>0)
      {
        echo "<script> 
        alert('عذراً يبدو أن  اسم المستخدم او البريد الالكتروني  مستخدم سابقاً');
        window.location='workshopprov.php';
        </script>";
        $con ->close();
      }


     }elseif($password !=$password2 && strlen($password >= 8))
    {echo "<script> 
      alert('كلمة المرور غير متطابقة');
      
      window.location='workshopprov.php';
        </script>";exit;
      
        
       }
    }
*/


 ?>



</body>
</html>