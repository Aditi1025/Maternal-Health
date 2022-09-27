<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

if(!isset($_SESSION['dob'])){
   header('location:login_form.php');
}

if(!isset($_SESSION['bg'])){
   header('location:login_form.php');
}

if(!isset($_SESSION['address'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style3.css">

</head>
<body>
   
<div class="form-container">
   <form>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p> <i>DOB (yyyy-mm-dd): </i> <b><?php echo $_SESSION['dob'] ?></b></p>
      <break>
      <p> <i>Blood Group: </i><b><?php echo $_SESSION['bg'] ?></b> </p> 
      <break>
      <p><i>Address </i><b><?php echo $_SESSION['address'] ?></b> </p>
      <a href="preganacy_bot.html"><button class="animationButton9" type="button" name="button">Preganancy Chatbot</button></a>
      <a href="logout.php" class="form-btn">Logout</a>
   </form>
</div>

</body>
</html>