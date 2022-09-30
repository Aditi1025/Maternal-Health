<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
if(!isset($_SESSION['address'])){
	header('location:login_form.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WMH</title>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="style44.css" />
	<link rel="stylesheet" href="user_page.css" />
	<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"/>


    <!-- Header1 -->
    <!--<header class="w3-container home w3-center" style="padding:128px 16px">
      <img src="./img/home6.png" id="home22" />
      <h1 class="w3-margin w3-jumbo">Women Maternal Healthcare</h1>
      
      <button
        class="w3-button  w3-padding-large w3-large w3-margin-top"
      >
        ENGLISH
      </button>

      <button class="w3-button w3-pink w3-padding-large w3-large w3-margin-top">
      <a href="homeHINDI.html"  style="text-decoration:none">हिंदी</a>
       </button> 
      
       
      </button>
    </header>-->
</head>
	<body>
   

			<!--Nav Bar-->
	
			<div class="navbar" >
			<div class="topnav w3" style="background: transparent;" id="myTopnav" data-toggle="collapse">
				  <img style = "padding-left: 20px; padding-top: 5px ;" src = "https://seeklogo.com/images/M/mothercare-logo-2E2A712868-seeklogo.com.png" width = "100px" height = "50px"/>
			   <div class="topnav-right">
    

				  <div class="dropdown">
					<button class="dropbtn"> Healthcare 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="1st-trimester.html">1<sup>st</sup> trimester</a>
					  <a href="2nd-trimester.html">2<sup>nd</sup> trimester</a>
					  <a href="month-3.html">3<sup>rd</sup> trimester</a>
					  <a href="yoga.html">Yoga</a>
					  <a href="diet.html">Diet</a>
					  <a href="precautions.html">Precautions</a>
					</div>
				  </div>

				   <div class="dropdown">
					<button class="dropbtn"> Personal Bots 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="menstru.html">Menstruation Predictor</a>
					  <a href="preganacy_bot.html"> Pregnancy Assistant</a>
					  <a href="ovulation.html"> Ovulation Tracker</a>
					  <a href="mscbot\index.html" onclick="myFunction()" >Postpartum bot</a>
					</div>
				  </div>

				  <div class="dropdown">
					<button class="dropbtn"> Services
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="https://www.google.com/maps?q=Midwifes+near+<?php echo $_SESSION['address'] ?>">Midwifes</a>
					  <a href="https://www.google.com/maps?q=Maternity+Hospitals+near+<?php echo $_SESSION['address'] ?>" onClick="myFucntion">Maternity Hospitals</a>
					  <a href="https://www.google.com/maps?q=Medical+Shops+near+<?php echo $_SESSION['address'] ?>" onClick="myFucntion">Medical Shops</a>
					  <a href="https://www.google.com/maps?q=Maternity+Stores+near+<?php echo $_SESSION['address'] ?>" onClick="myFucntion" >Stores</a>
					</div>
				  </div>
			  <a href="ChatPage\index.html" onclick="myFunction()" >Connect</a>
			   <a href="profile.php" class="active" style = " color : white;" onclick=""> <img src = "profilepic.png" height = "20px" width = "20px"/>  <span><?php echo $_SESSION['user_name'] ?></span> </a>
			  <a href="logout.php" class="active" style = " color : white;" onclick="">Logout</a>
			  <a class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			  </a>
			</div>
			</div>
			<div class = "center">
    <div class="left">  <img height = "300px" src = "coverpage.png"/> 
    </div>
    <div class="right"><img height = "700px" src = "img\homeimg.jpeg"/> </div>
</div>

			<div class="w3-container home w3-center container1center w3-mobile container1" id="home" style = "background-color: #FFE8E8; ">



			      <div class= "container1left">  <img height = "300px" src = "div2left.png"/> 
    </div>
    <div class="container1right"><img height = "400px" src = "div2.png"/> </div>
			  </div>
			

			<!--End Of Navbar-->

			<!--YOGA      -->
            
			<div class="w3-container home w3-center container1center w3-mobile container1" id="home" style = "padding-top: 0;">
             
			      <div class= "container1left">  <img height = "500px" src = "div3left.png"/> 
    </div>
    <div class="container1right" style = "padding-right: 0"> <img height = "400px" src = "div3.png"/> </div>
			  </div>

			  <!--- diet-->
			  <div class="w3-container home w3-center container1center w3-mobile container1" id="home" style = "padding-top: 0; background-color: #8BBCCC">
             
			      <div class= "container1left">  <img height = "500px" src = "div4.png"/> 
    </div>
    <div class="container1right" style = "padding-right: 0"> <img height = "400px" src = "div4right.png"/> </div>
			  </div>


			<!--- prec-->
			  <div class="w3-container home w3-center container1center w3-mobile container1" id="home" style = "padding-top: 0;">
             
			      <div class= "container1left">  <img height = "500px" src = "div5left.png"/> 
    </div>
    <div class="container1right" style = "padding-right: 0"> <img height = "400px" src = "div5.png"/> </div>
			  </div>

			
			
			
			  
			</div>

			<script>
		

			(function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
			</script>



  </body>
	<!-- Footer -->
	<footer class="w3-container w3 w3-padding-4 w3-center" style="background-color: #1F4690" >
	  <div class="w3-large w3-padding-32"></div>
	  <p></p>
	</footer>
</html>

