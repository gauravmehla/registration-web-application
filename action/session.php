<?php

include_once '../include/connect.php';
session_start();

$pin_id 	= $_REQUEST['pin'];

$result 	= mysql_query("SELECT * FROM `pin_table` WHERE `pin` = '$pin_id' ");

if($data    = mysql_fetch_array($result))
{
	if ($data['pin']==$pin_id)
	{
		$_SESSION['permission']='yes';
		header('Location: ../enter.php');
	}	
	
} else
	{
	 header('Location:../index.php');	
	}

?>