<?php
session_start();
if($_SESSION['permission']!='yes'){
	header('location:index.php');
}
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<a href="logout.php">
	<div class="logoutButton">
		Logout
	</div>
</a>
	
	<div class="credit">
		<p> <strong>In Guidance of : </strong>Er. Gurmeet Saini </p>
		<span><strong>App Created By :</strong> Gaurav Mehla , CSE Dept. 2912041 </br></span>
		<span class="second"> Nishi Gaba , CSE Dept. 2912045</span>
	</div>
	
	<div class="back_wrapper">
 		<img src="img/kitm_logo.png" class="kitm_logo" id="kitm_logo">

 	<?php
 	if(isset($_SESSION['permission'])){
 	?>
		<a href="register.php"><div class="button" id="register_button">
			Register
		</div></a>
		<a href="search.php"><div class="button" id="search_button">
			Search
		</div></a>
		<a href="check.php"><div class="button" id="logout_button">
			Check
		</div></a>
	<?php } ?>

		<div class="mid_content">
 			<h1>Organizes</h1>
 			<span class="fiesta">Science Fiesta '15</span>
 			<span class="develop">SUSTAINABLE DEVELOPMENT & ENVIRONMENT</span>
 			<span class="date">8th October,2015</span>
 			<span class="address">
 				Bhor Saidan, Kurukshetra- Pehowa Road, Kurukshetra 136119, Haryana, India	
 			</span></br>
 			<span class="info">
 				M.:09896897379, 08607248888, Email:sciencefiesta15@kitm.in, Website:wwwkitm.in
 			</span>
 			<!--<img src="img/settings.png" class="setting_img"> -->
 		</div>
</body>
</html>

	
