<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['dob'] = $row['dob'];
         $_SESSION['bg'] = $row['blood_group'];
         $_SESSION['address'] = $row['address'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="registerpage.css">

</head>
<body>

<!---------------------------------------changes done below--------------------------------------------->


<div class="container right-panel-active">
   <!-- Sign Up -->
   <div class="container__form container--signup">
     <form action="" method="post" class="form" id="form2">
       <h2 class="form__title" style = "color: white; font-size: 40px; font-weight: bold;"> Sign In </h2>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input class="input" type="email" name="email" required placeholder="enter your email">
      <input class="input" type="password" name="password" required placeholder="enter your password">
      <input class="btn input" type="submit" name="submit" value="Sign now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
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
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>
-->
  <script src="registerpagee.js"></script>
</body>
</html>