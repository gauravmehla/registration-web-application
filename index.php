<?php include_once 'include/connect.php'; ?>
<html>
<head>
	<title>LIVE_PROJECT</title>
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
	<div class="credit">
		<p> <strong>In Guidance of : </strong>Er. Gurmeet Saini </p>
		<span><strong>App Created By :</strong> Gaurav Mehla , CSE Dept. 2912041 </br></span>
		<span class="second"> Nishi Gaba , CSE Dept. 2912045</span>
	</div>
	<div class="front_wrapper">
		<div class="login_container" id="login_container">
			<form name="pin_form" class="pin_form" action="action/session.php" method="POST" >
				<table class="pin_table">
					<tr>
						<th>Enter Your Pin</th>
					</tr>
					<tr>
						<td><input type="password" name="pin" id="inputPin"></td>
					</tr>
					<tr>
						<td><input type="submit" value="submit" id="submit" class="btn"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>

	<div class="back_wrapper">
		<div class="mid_content">
 			<h1>Organizes</h1>
 			<span class="fiesta">Science Fiesta '15</span>
 			<span class="develop">SUSTAINABLE DEVELOPMENT & ENVIRONMENT</span>
 			<span class="date">8th October,2015</span>
 			<span class="address">
 				Bhor Saidan, Kurukshetra- Pehowa Road, Kurukshetra 136119, Haryana, India	
 			</span></br>
 			<span class="info">
 				M.:09896897379, 08607248888, Email:sciencefiesta15@kitm.in, Website:www.kitm.in
 			</span>
 			<!--<img src="img/settings.png" class="setting_img"> -->
 		</div>

 		<img src="img/kitm_logo.png" class="kitm_logo" id="kitm_logo">
 	</div>
	
</body>
</html>