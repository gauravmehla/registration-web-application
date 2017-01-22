<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
	<div class="back_wrapper">
 		<img src="img/kitm_logo.png" class="kitm_logo" id="kitm_logo">

		<div class="button" id="register_button">
			<a href="register.php">Register</a>
		</div>

		<div class="button" id="search_button">
			<a href="search.php">Search</a>
		</div>
		<div class="button" id="logout_button" onload="logout()">
			<a href="logout.php">Logout</a>
		</div>
	</div>

<script type="text/javascript">
	function logout()
	{
		document.getElementById('logout_button').style.display="block";
	}
	window.onload=logout;
</script>

</body>
</html>
