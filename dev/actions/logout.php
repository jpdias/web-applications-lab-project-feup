<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');


	$_SESSION['username'] = "";
	
	$_SESSION['idreader'] = "";
	
	$_SESSION['idmanager'] = "";
	
	session_destroy();
	
	
	header('Location: ../pages/main.php');
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>