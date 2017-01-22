<?php include_once 'include/connect.php'; ?>
<?php
session_start();
if($_SESSION['permission']!='yes'){
	header('location:index.php');
}
?>
<html>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>
	<a href="logout.php">
	<div class="logoutButton">
		Logout
	</div>
</a>
	<div class="back_wrapper">
 		<img src="img/kitm_logo.png" class="kitm_logo" id="kitm_logo">

 		<?php
 	if(isset($_SESSION['permission'])){
 	?>
		<a href="search.php"><div class="button" id="register_button">
			Search
		</div></a>
		<a href="check.php"><div class="button" id="search_button">
			Check
		</div></a>
	<?php } ?>
    </div>
	<form name="data_submission_form" action="action/submit.php" method="POST">
		<div class="registerTableDiv">
		<table width="70%" align="center" class="registerTable" id="table">
			<tr>
				<td colspan="4" class="heading"><center><b>Student Registration Form</b></center></td>
			</tr>
			<tr>
				<td colspan="4">
					<p style="color:red;text-align:center;"><?php echo @$_REQUEST['msg']; ?> </p>
				</td>
			</tr>
			
			<tr>
				<td>Name</td>
					<td><input name="st_name" type="text" id="st_name" class="border" /></td>
			</tr>	
			<tr>
				<td>Father Name</td>
				<td><input name="st_father" type="text" id="st_father" class="border"/></td>
			</tr>
			<tr>
				<td>Registration no.</td>

				<td><input name="st_register" class="border" type="text" id="st_register" value="<?php
					$fst  = mt_rand(1,9);
					$sec  = mt_rand(1,9);
					$thr  = mt_rand(1,9);
					$four = mt_rand(1,9);

					$reg  = $fst.$sec.$thr.$four;

					$check = false;
					while($check!=true){
						$result = mysql_query('SELECT * FROM `submit_data` WHERE `st_register`="'.$reg.'"');
						if(mysql_num_rows($result) > 0){
							$fst  = mt_rand(1,9);
							$sec  = mt_rand(1,9);
							$thr  = mt_rand(1,9);
							$four = mt_rand(1,9);
							$reg  = $fst.$sec.$thr.$four;
						} else {
							$check = true;
						}
					}
					echo $reg;
				?>" readonly/></td>
			</tr>
			<tr>
				<td>Mobile no.</td>
				<td><input name="st_mobile" class="border" type="text" id="st_mobile" /></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="st_address" class="border" id="st_address"></textarea></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input name="st_email" class="border" type="text" id="st_email" /></td>
			</tr>
			<tr>
				<td>Class</td>
				<td>
					<select name="st_class" id="st_class">
						<option value="null">Please Select Class</option>
						<option value="1">XI</option>
						<option value="2">XII</option>
				</td>
			</tr>
			<tr>
				<td>Stream</td>
				<td>
					<select name="st_stream" id="st_stream">
						<option value="1">Non-Medical</option>
						<option value="2">Commerce</option>
						<option value="3">Arts</option>
						<option value="4">Medical</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<select name="st_city" id="st_city" onchange="selectCity(this.value)">
						<option>Please Select City</option>
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
			 					echo "<option>".$city."</option>";
			 				}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>School :</td>
				<td>
						<select id="result" name="st_school">

						</select>
					</td>
			</tr>	
			<tr>
				<td>Status</td>
				<td>
					<select name="present">
						<option value="yes">Present</option>
						<option value="no" selected>Absent</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Activity</td>
				<td><input type="checkbox" value="speech" name="activity[]">Speech
				<input type="checkbox" value="model_display" name="activity[]">Model Display
				<input type="checkbox" value="essay_writing" name="activity[]">Essay writing
				<input type="checkbox" value="best_out__of_waste" name="activity[]">Best out of waste
				<input type="checkbox" value="poster_making" name="activity[]">Poster making
				<input type="checkbox" value="quiz" name="activity[]">Quiz</td>
			</tr>
			<tr align="center">
				<td colspan="4"><input type="submit" name="submit" value="Submit"  class="btn"/>
				<input type="reset" name="Submit2" value="Reset"  class="btn" />

				<p style="color:red;font-size:12px;"><?php if(@$_POST['check']=='yes'){ echo $_REQUEST['msg'];}?></center></p></td>
			</tr>
		</table>
		</div>
		<input type="hidden" value="yes" name="check">
	</form>

	<script>
	 function selectCity(value){
	 	 if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
		    xmlhttp=new XMLHttpRequest();
		  } else {  // code for IE6, IE5
		    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }

		  xmlhttp.onreadystatechange=function() {
		    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		      document.getElementById("result").innerHTML=xmlhttp.responseText;
		    }
		  }
		  xmlhttp.open("GET","selectcity.php?city="+value,true);
		  xmlhttp.send();
		}

	</script>
</body>
</html>