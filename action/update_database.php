<?php 

include_once '../include/connect.php'; 

session_start();

error_reporting(0);

if(!isset($_POST['update'])) 
{

$name		= $_SESSION['values']['st_name'];
$father 	= $_SESSION['values']['st_father'];
$register 	= $_SESSION['values']['st_register'];
$mobile  	= $_SESSION['values']['st_mobile'];
$address 	= $_SESSION['values']['st_address'];
$email  	= $_SESSION['values']['st_email'];
$class  	= $_SESSION['values']['st_class'];
$stream   	= $_SESSION['values']['st_stream'];
$present	= $_SESSION['values']['present'];
$activity 	= $_SESSION['values']['st_activity'];

//echo $activity;	
$result = mysql_query("UPDATE `submit_data` SET `st_name`='$name',`st_father`='$father',`st_mobile`='$mobile',`st_address`= '$address',`st_email`='$email',`st_class`='$class',`st_stream`='$stream',`st_activity`='$activity' WHERE `st_register`='$register' ")or die(mysql_error());
if($result){
	echo 'Data Updated Succesfully';
}

}

else
{
	echo "hello";
}

?>

