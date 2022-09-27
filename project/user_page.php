<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>WMH</title>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="style4.css">
</head>
	<body>
	
			<!--Nav Bar-->
			<div class="navbar" >
			<div class="topnav w3" style="background-color: #00bcd4" id="myTopnav" data-toggle="collapse">
			   <a href="profile.php" class="active" onclick=""> Hi <span><?php echo $_SESSION['user_name'] ?></span> </a>
				  <div class="dropdown">
					<button class="dropbtn">1<sup>st</sup> trimester 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="month-1.html">1<sup>st</sup> month</a>
					  <a href="month-2.html">2<sup>nd</sup> month</a>
					  <a href="month-3.html">3<sup>rd</sup> month</a>
					</div>
				  </div>
				  <div class="dropdown">
					<button class="dropbtn">2<sup>nd</sup> trimester 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="month4.html">4<sup>th</sup> month</a>
					  <a href="month5.html">5<sup>th</sup> month</a>
					  <a href="month6.html">6<sup>th</sup> month</a>
					</div>
				  </div>
				  <div class="dropdown">
					<button class="dropbtn">3<sup>rd</sup> trimester 
					  <i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
					  <a href="month-1.html">7<sup>th</sup> month</a>
					  <a href="month-2.html">8<sup>th</sup> month</a>
					  <div class="topnav w3" style="background-color: #00bcd4" id="myTopnav" data-toggle="collapse">
					  <a href="month-3.html">9<sup>th</sup> month</a>
						</div>
					</div>
				  </div>
			  <a href="mscbot\index.html" onclick="myFunction()" >Postpartum Bot</a>
			  <a href="ChatPage\index.html" onclick="myFunction()" >Connect</a>
			  <a href="logout.php" class="active" onclick="">Logout</a>
			  <a class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			  </a>
			</div>
			</div>
			
			<div class="w3-container home w3-center w3-mobile" style="padding:128px 16px" id="home">
			      <img src="./img/home6.png" style="max-width:100%;height:auto;" id="home22" />
				  <hr>
				  <h1 class="w3-margin">Women Maternal Healthcare</h1>
				  <hr>
		
			</div>
			
			<!--End Of Navbar-->
			<!--YOGA      -->
			<div class="w3-row-padding  w3 w3-padding-20 w3-container" id="yoga">
			  
				<div class="w3-twothird" >
				  <h1 class="heading" >YOGA</h1>
				  <p class="w3-padding-32">
					Much like other types of childbirth-preparation classes, prenatal
					yoga is a multifaceted approach to exercise that encourages
					stretching, mental centering and focused breathing. Research
					suggests that prenatal yoga is safe and can have many benefits for
					pregnant women and their babies.
				  </p>
				  <p >
					There are many different styles of yoga — some more strenuous than
					others. Prenatal yoga, hatha yoga and restorative yoga are the best
					choices for pregnant women. Talk to the instructor about your
					pregnancy before starting any other yoga class
				  </p>
				</div>

				<div class="w3-third w3-mobile w3-center">
				  <img src="./img/yoga_1.jpg" style="max-width:100%;height:auto;"
				  />
				</div>
			  
			</div>


			<!--DIET         -->
			<div class="w3-row-padding  w3-white w3-padding-64 w3-container" id="diet">
			  
				<div class="w3-third w3-mobile w3-center">
					<img id="diet" src="./img/diet_1.jpg" style="max-width:100%;height:auto;"
				  />
				</div>

				<div class="w3-twothird w3-right " >
				  <h1 class="heading" >DIET</h1>
				  <p class="w3-padding-32 w3-right">
					Much like other types of childbirth-preparation classes, prenatal
					yoga is a multifaceted approach to exercise that encourages
					stretching, mental centering and focused breathing. Research
					suggests that prenatal yoga is safe and can have many benefits for
					pregnant women and their babies.
				  </p>

				  <p >
					Much like other types of childbirth-preparation classes, prenatal
					yoga is a multifaceted approach to exercise that encourages
					stretching, mental centering and focused breathing. Research
					suggests that prenatal yoga is safe and can have many benefits for
					pregnant women and their babies.
				  </p>
				</div>

			</div>
			<!-- BODY CHANGES -->
			<div class="w3-row-padding w3 w3-padding-64 w3-container" style="background-color: #00bcd4" id="body-change">
			  
				<div class="w3-twothird">
				  <h1 class="heading-1" >BODY CHANGES</h1>
				  <p class="w3-padding-32">
					Much like other types of childbirth-preparation classes, prenatal
					yoga is a multifaceted approach to exercise that encourages
					stretching, mental centering and focused breathing. Research
					suggests that prenatal yoga is safe and can have many benefits for
					pregnant women and their babies.
				  </p>

				  <p>
					Much like other types of childbirth-preparation classes, prenatal
					yoga is a multifaceted approach to exercise that encourages
					stretching, mental centering and focused breathing. Research
					suggests that prenatal yoga is safe and can have many benefits for
					pregnant women and their babies.
				  </p>
				</div>

				<div class="w3-third w3-mobile w3-center">
				  <img src="./img/body_changes.jpg" style="max-width:100%;height:auto;"
				  />
				
			  </div>
			</div>

			<!--PRECAUTION-->
			<div class="w3-row-padding  w3-white w3-padding-64 w3-container" id="precaution">
			  
				<div class="w3-third w3-mobile w3-center">
				  <img src="./img/precaution.jpg" id="pre" style="max-width:100%;height:auto;"
				  />
				</div>

				<div class="w3-twothird">
				  <h1 class="heading"  class="w3-mobile">PRECAUTIONS</h1>
				  <p class="w3-padding-32">
					Much like other types of childbirth-preparation classes, prenatal
					yoga is a multifaceted approach to exercise that encourages
					stretching, mental centering and focused breathing. Research
					suggests that prenatal yoga is safe and can have many benefits for
					pregnant women and their babies.
				  </p>

				  <p >
					Much like other types of childbirth-preparation classes, prenatal
					yoga is a multifaceted approach to exercise that encourages
					stretching, mental centering and focused breathing. Research
					suggests that prenatal yoga is safe and can have many benefits for
					pregnant women and their babies.
				  </p>
				</div>
			  
			</div>

			<script>
			function myFunction() {
			  var x = document.getElementById("myTopnav");
			  if (x.className === "topnav") {
				x.className += " responsive";
			  } else {
				x.className = "topnav";
			  }
			}
			</script>



  </body>
	<!-- Footer -->
	<footer class="w3-container w3 w3-padding-4 w3-center" style="background-color: #00bcd4" >
	  <div class="w3-large w3-padding-32"></div>
	  <p></p>
	</footer>
</html>
