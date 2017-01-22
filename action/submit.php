
<?php

include_once '../include/connect.php';
session_start();

$name    	= test_input($_REQUEST['st_name']);
$father 	= test_input($_REQUEST['st_father']);
$register 	= test_input($_REQUEST['st_register']);
$mobile  	= test_input($_REQUEST['st_mobile']);
$address 	= test_input($_REQUEST['st_address']);
$email  	= test_input($_REQUEST['st_email']);
$class  	= test_input($_REQUEST['st_class']);
$stream   	= test_input($_REQUEST['st_stream']);
$school  	= test_input($_REQUEST['st_school']);
$city   	= test_input($_REQUEST['st_city']);
$present	= test_input($_REQUEST['present']);
$activity 	= test_input(join(',',$_REQUEST['activity']));

if($_POST['check']=='yes' && $name != '')
{
	mysql_query("INSERT IGNORE INTO `submit_data`(st_name,st_father,st_register,st_mobile,st_address,st_email,st_class, st_stream,st_school,st_city,st_activity,present) VALUES('$name','$father','$register','$mobile','$address','$email','$class','$stream','$school','$city','$activity','$present')")or die(mysql_error());
	
	header('location:../register.php?msg= Data Saved Successfully');	
} else {
	header('location:../register.php?msg= Error Occured !');	
}

function test_input($data){

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
