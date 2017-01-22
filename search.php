<?php
session_start();
if($_SESSION['permission']!='yes'){
	header('location:index.php');
}
?>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
	<a href="logout.php">
	<div class="logoutButton">
		Logout
	</div>
</a>

<?php include_once 'include/connect.php';?>

	<div class="back_wrapper">
 		<img src="img/kitm_logo.png" class="kitm_logo" id="kitm_logo">

 		<?php
 	if(isset($_SESSION['permission'])){
 	?>
		<a href="register.php"><div class="button" id="register_button">
			Register
		</div></a>
		<a href="check.php"><div class="button" id="search_button">
			Check
		</div></a>
	<?php } ?>
    </div>

<table width="97%" id="search_table">
	<tr>
		<th>Search</th>
		<td>
			<input type="text" name="st_name" onkeyup="showResult()" id="st_name" placeholder="Enter Student Name">
		</td>

		<th>Reg no.</th>
		<td>
			<input type="text" name="reg_search" onkeyup="showResult()" id="st_register" placeholder="Enter Student Reg no.">
		</td>

		<th>Class</th>
		<td>
			<select name="st_class" id="st_class" onchange="showResult()">
				<option value="null">Please Select Class</option>
				<option value="1">XI</option>
				<option value="2">XII</option>
			</select>
		</td>
	</tr><tr>
		<th>Stream</th>
		<td>
			<select name="st_stream" id="st_stream" onchange="showResult()">
				
				<option value="1">Non-Medical</option>
				<option value="2">Commerce</option>
				<option value="3">Arts</option>
				<option value="4">Medical</option>
			</select>
		</td>

				<th>City</th>
				<td>
					<select name="st_city" id="st_city" onchange="showResult()">
						<option value="null"> Select City</option>
						<?php
							$SQL="SELECT * FROM `schools`";
			 				$rs=mysql_query($SQL);
			 				$city_array = array();
			 				while ($data = mysql_fetch_array($rs))
			 				{
			 					if(!in_array($data['city'], $city_array))
			 					{
			 						$city_array[] = $data['city'];
			 					}
			 				}

			 				foreach ($city_array as $city) {
			 					echo "<option value='".$city."'>".$city."</option>";
			 				}
						?>
					</select>
				</td>

				<th>School</th>
				<td>
					<select name="st_school" id="st_school" onchange="showResult()">
						<option value="null"> Select School</option>
						<?php
							$SQL="SELECT * FROM `schools`";
			 				$rs=mysql_query($SQL);
			 				$school_array = array();
			 				while ($data = mysql_fetch_array($rs))
			 				{
			 					if(!in_array($data['name'], $school_array))
			 					{
			 						$school_array[] = $data['name'];
			 					}
			 				}

			 				foreach ($school_array as $school) 
			 				{
			 					echo "<option value='".$school."'>".$school."</option>";
			 				}
						?>
					</select>
				</td>
			</tr>

			<tr>
				<th>Activity</th>
				<td>
					<select name="st_activity" id="st_activity" onchange="showResult()">
						<option value="null"> Select Activity</option>
						<option value="speech" >Speech</option>
						<option value="model_display" >Model Display</option>
						<option value="essay_writing" >Essay writing</option>
						<option value="best_out__of_waste" >Best out of waste</option>
						<option value="poster_making" >Poster making</option>
						<option value="quiz" >Quiz</option>
					</select>
				</td>
			</tr>
	</table>


<div id="livesearch"></div>
	
	<script>
	function showResult(st_name) {
		var stream 		= document.getElementById('st_stream').value;
		var city 		= document.getElementById('st_city').value;
		var school  	= document.getElementById('st_school').value;
		var st_name  	= document.getElementById('st_name').value;
		var st_register = document.getElementById('st_register').value;
		var st_class	= document.getElementById('st_class').value;
		var st_activity	= document.getElementById('st_activity').value;

		if(st_name==''){
			st_name='';
		}

	  if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	  } else {  // code for IE6, IE5
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }

	  xmlhttp.onreadystatechange=function() {
	    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
	    }
	  }
	  xmlhttp.open("GET","livesearch.php?stream="+stream+"&city="+city+"&school="+school+"&st_name="+st_name+"&st_register="+st_register+"&st_class="+st_class+"&st_activity="+st_activity,true);
	  xmlhttp.send();
	}

	</script>

</body>
</html>