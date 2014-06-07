<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');
	
	
	if($_POST['readeridinput3'] != "")
	{
		enableUserAccount($_POST['readeridinput3']);
			
				
		$_SESSION['success_messages'][] = 'Account enabled successfully!';
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error enabling account!';
	}
	
	
	$_SESSION['admin'] = 'admin';
	
	header('Location: ../pages/admin.php');
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>