<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<body>
	<div class="back_wrapper">
 		<img src="img/kitm_logo.png" class="kitm_logo" id="kitm_logo">

 		<?php
 	if(!isset($_SESSION['permission'])){
 	?>

		<div class="button" id="register_button" class="btn">
			<a href="register.php">Register</a>
		</div>

		<div class="button" id="search_button">
			<a href="search.php">Search</a>
		</div>
		<div class="button" id="logout_button">
			<a href="logout.php">Logout</a>
		</div>
	<?php } ?>
</body>
</html>
