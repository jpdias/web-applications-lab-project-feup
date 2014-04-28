<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');


	$_SESSION['username'] = "";
	
	
	header('Location: ../pages/main.php');
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>