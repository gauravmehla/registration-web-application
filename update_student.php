<?php

if(isset($_POST['update']))
{
	session_start();
	$values=array(
		"st_name"		=> $_POST['st_name'],
		"st_father"		=> $_POST['st_father'],
		"st_register"	=> $_POST['st_register'],
		"st_class"		=> $_POST['st_class'],
		"st_stream"		=> $_POST['st_stream'],
		"st_mobile"		=> $_POST['st_mobile'],
		"st_activity"	=> join(',',$_REQUEST['activity']),
		"st_email"		=> $_POST['st_email'],
		"st_address" 	=> $_POST['st_address'],
		"present"		=> $_POST['present']
		);
	$_SESSION['values'] = $values;
}

?>
<form method="POST"  action="<?php if(isset($_POST['update'])) { header('location:action/update_database.php');} else { echo $_SERVER['PHP_SELF']; } ?>">
	<table><tr>
		<td>Enter ID :</td>
		<td> <input type="text" placeholder="Enter Reg. No" name="st_reg"> </td>
	</tr>
	
		<?php
			if(isset($_POST['submit'])){
				include 'include/connect.php';
 
				$result = mysql_query('SELECT * FROM `submit_data` WHERE `st_register`="'.$_POST['st_reg'].'"');
				$data = mysql_fetch_array($result);
				if(mysql_num_rows($result)>0){
			}
			?>

			<tr>
				<td>Name</td>
					<td><input name="st_name" type="text" id="st_name" class="border" value="<?php echo $data['st_name']; ?>" /></td>
			</tr>	
			<tr>
				<td>Father Name</td>
				<td><input name="st_father" type="text" id="st_father" class="border" value="<?php echo $data['st_father']; ?>"/></td>
			</tr>
			<tr>
				<td>Registration no.</td>

				<td><input name="st_register" class="border" type="text" id="st_register" value="<?php echo $data['st_register']; ?>" readonly/></td>
			</tr>
			<tr>
				<td>Mobile no.</td>
				<td><input name="st_mobile" class="border" type="text" id="st_mobile" value="<?php echo $data['st_mobile']; ?>" /></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><textarea name="st_address" class="border" id="st_address"><?php echo $data['st_address']; ?></textarea></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input name="st_email" class="border" type="text" id="st_email" value="<?php echo $data['st_email']; ?>"/></td>
			</tr>
			<tr>
				<td>Class</td>
				<td>
					<select name="st_class" id="st_class">
						<option value="null" <?php if($data['st_class']=='null') echo 'selected'; ?> >Please Select Class</option>
						<option value="1" <?php if($data['st_class']=='1') echo 'selected'; ?>>XI</option>
						<option value="2" <?php if($data['st_class']=='2') echo 'selected'; ?>>XII</option>
				</td>
			</tr>
			<tr>
				<td>Stream</td>
				<td>
					<select name="st_stream" id="st_stream">
						<option value="1" <?php if($data['st_stream']=='1') echo 'selected'; ?>>Non-Medical</option>
						<option value="2" <?php if($data['st_stream']=='2') echo 'selected'; ?>>Commerce</option>
						<option value="3" <?php if($data['st_stream']=='3') echo 'selected'; ?>>Arts</option>
						<option value="4" <?php if($data['st_stream']=='4') echo 'selected'; ?>>Medical</option>
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
				<td>
				<input type="checkbox" value="speech" name="activity[]" <?php 
					$activities = explode(',',$data['st_activity']);
					foreach($activities as $activity){
						if($activity=='speech'){
							echo 'checked';
						}
					}

				 ?>>Speech
				<input type="checkbox" value="model_display" name="activity[]" <?php 
					$activities = explode(',',$data['st_activity']);
					foreach($activities as $activity){
						if($activity=='model_display'){
							echo 'checked';
						}
					}

				 ?>>Model Display
				<input type="checkbox" value="essay_writing" name="activity[]" <?php 
					$activities = explode(',',$data['st_activity']);
					foreach($activities as $activity){
						if($activity=='essay_writing'){
							echo 'checked';
						}
					}

				 ?>>Essay writing
				<input type="checkbox" value="best_out__of_waste" name="activity[]" <?php 
					$activities = explode(',',$data['st_activity']);
					foreach($activities as $activity){
						if($activity=='best_out__of_waste'){
							echo 'checked';
						}
					}

				 ?>>Best out of waste
				<input type="checkbox" value="poster_making" name="activity[]" <?php 
					$activities = explode(',',$data['st_activity']);
					foreach($activities as $activity){
						if($activity=='poster_making'){
							echo 'checked';
						}
					}

				 ?>>Poster making
				<input type="checkbox" value="quiz" name="activity[]" <?php 
					$activities = explode(',',$data['st_activity']);
					foreach($activities as $activity){
						if($activity=='quiz'){
							echo 'checked';
						}
					}

				 ?>>Quiz</td>
			</tr>
			<tr align="center">
				<td colspan="4"><input type="submit" name="update" value="update"/>
			</tr>
	
		<?php } ?>

			<tr align="center">
				<td colspan="4"><input type="submit" name="submit" style="display:none;" class="btn"/>

			<!--	<p style="color:red;font-size:12px;"><?php if(@$_POST['check']=='yes'){ echo $_REQUEST['msg'];}?></center></p></td> -->
			</tr>
		
</table>
</form>

<script type="text/javascript">
	function upDate()
	{
		window.location="action/update_database.php";
	}

</script>