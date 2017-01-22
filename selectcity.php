<?php


include 'include/connect.php';

$result = mysql_query('SELECT * FROM `schools` WHERE `city`="'.$_REQUEST['city'].'"');
while($data = mysql_fetch_array($result)){
	echo '<option value="'.$data['name'].'">'.$data['name'].'</option>';
}
