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
   <link rel="stylesheet" href="stylep.css">

</head>
<body>
   
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Profile</h1>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <div class="card">
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo $_SESSION['user_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><?php echo $_SESSION['address'] ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td><?php echo $_SESSION['dob'] ?></td>
                        </tr>
                        <tr>
                            <td>Blood Group</td>
                            <td>:</td>
                            <td><?php echo $_SESSION['bg'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="user_page.php" class="button-26">Home</a>
                <a href="logout.php" class="button-26">Logout</a>
            </div>
         </div>
</body>
</html>