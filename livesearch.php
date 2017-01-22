<?php

include_once 'include/connect.php';

$city 	  	= $_REQUEST['city'];
$stream   	= $_REQUEST['stream'];
$school   	= $_REQUEST['school'];
$name     	= $_REQUEST['st_name'];
$register 	= $_REQUEST['st_register'];
$class 		= $_REQUEST['st_class'];
$activity 	= $_REQUEST['st_activity'];


$sql = 'SELECT * FROM `submit_data` WHERE';

if($city != 'null'){
	$sql .= ' `st_city`="'.$city.'" AND';
}

if($stream != 'null'){
	$sql .= ' `st_stream`="'.$stream.'"';
	if($school != 'null'){
		$sql .= ' AND ';
	}
}

if($school != 'null'){
	$sql .= ' `st_school`="'.$school.'"';
}

if($name != ''){
	$sql .= ' AND `st_name`="'.$name.'"';
}

if($register != ''){
	$sql .= ' AND `st_register`="'.$register.'"';
}

if($class != 'null'){
	$sql .= ' AND `st_class`="'.$class.'"';
}

if($activity != 'null'){
	$sql .= ' AND `st_activity`LIKE "%'.$activity.'%"';
}

$sql .= ' AND `present`="yes"';

//echo $sql;

$result = mysql_query($sql);

echo '<table width="100%" class="table searchResult" align="center">';

echo 'No. of Students : '.mysql_num_rows($result);


if(mysql_num_rows($result) > 0 ){
	echo '<tr>';
	echo '<td>Reg.</td>';
	echo '<td>Name</td>';
	echo '<td>Father Name</td>';
	echo '<td>Mobile</td>';
	echo '<td>Address</td>';
	echo '<td>Email</td>';
	echo '<td>Class</td>';
	echo '<td>Stream</td>';
	echo '<td>School</td>';
	echo '<td>City</td>';
	echo '<td>Activity</td>';
	echo '</tr>';
}

while($data = mysql_fetch_array($result)){

	if($data['st_stream']=='1'){
		$data['st_stream']='Non-Medical';
	} else if($data['st_stream']=='2'){
		$data['st_stream']='Commerce';
	} else if($data['st_stream']=='3'){
		$data['st_stream']='Arts';
	} else if($data['st_stream']=='4'){
		$data['st_stream']='Medical';
	}

	if($data['st_class']=='1'){
		$data['st_class']='XI';
	} else if($data['st_class']=='2'){
		$data['st_class']='XII';
	}
	echo "<tr>";
	echo "<td>".$data['st_register']."</td>";
	echo "<td><b>".$data['st_name']."</b></td>";
	echo "<td>".$data['st_father']."</td>";
	echo "<td>".$data['st_mobile']."</td>";
	echo "<td>".$data['st_address']."</td>";
	echo "<td>".$data['st_email']."</td>";
	echo "<td>".$data['st_class']."</td>";
	echo "<td>".$data['st_stream']."</td>";
	echo "<td>".$data['st_school']."</td>";
	echo "<td>".$data['st_city']."</td>";

	$data['st_activity'] = str_replace('_', ' ', $data['st_activity']);
	echo "<td>".$data['st_activity']."</td>";
	echo "</tr>";
}

echo '</table>';

?>