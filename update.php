<?php

include_once 'include/connect.php';

$id 		= test_input($_REQUEST['id']);
$address 	= test_input($_REQUEST['address']);

mysql_query('UPDATE `submit_data` SET `present`="yes" ,`st_address`="'.$address.'" WHERE `st_id`="'.$id.'"');



function test_input($data){

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>