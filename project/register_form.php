<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $dob = mysqli_real_escape_string($conn, $_POST['dob']);
   $blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);
   $address = mysqli_real_escape_string($conn,$_POST['address']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, dob, blood_group, address, password, user_type) VALUES('$name','$email','$dob','$blood_group','$address','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->

   <!---------------------------------------changes done below--------------------------------------------->
   <link rel="stylesheet" href="registerpage.css"> 
   <!---------------------------------------changes done below--------------------------------------------->

   

</head>
<body>
   
<!---------------------------------------changes done below--------------------------------------------->

<div class="container right-panel-active">
   <!-- Sign Up -->
   <div class="container__form container--signup">
      <form action="" method="post" class="form" id="form2">
     <h2 class="form__title" style = "color: white; font-size: 26px; font-weight: bold;"> Sign Up</h2>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input class="input" type="text" name="name" required placeholder="enter your name">
      <input class="input" type="email" name="email" required placeholder="enter your email">
      <input class="input" type="text" name="dob" required placeholder="enter your date of birth (yyyy-dd-mm)">
      <input class="input" type="text" name="blood_group" required placeholder="enter your blood group">
      <input class="input" type="text" name="address" required placeholder="enter your address">
      <input class="input" type="password" name="password" required placeholder="enter your password">
      <input class="input" type="password" name="cpassword" required placeholder="confirm your password">
      <select class="input"  name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input class="btn" type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href = "login_form.php">Sign In</a> </p>
   </form>
   </div>


   <!-- Overlay -->
   <div class="container__overlay">
      <div class="overlay" >
         <div style = "font-size: 50px; text-align: center; color: #0F3460; " class="overlay__panel overlay--left">
            <img src = "img\logo.png" />
         </div>
      </div>
   </div>
</div>


<!---------------------------------------changes done above--------------------------------------------->

<!--
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="dob" required placeholder="enter your date of birth (yyyy-dd-mm)">
      <input type="text" name="blood_group" required placeholder="enter your blood group">
      <input type="text" name="address" required placeholder="enter your address">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>
-->
   <script src="registerpagee.js"></script>
  
</body>
</html>