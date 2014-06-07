<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');
	
	
	if($_POST['readeridinput2'] != "")
	{
		disableUserAccount($_POST['readeridinput2']);
			
				
		$_SESSION['success_messages'][] = 'Account disabled successfully!';
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error disabling account!';
	}
	
	
	$_SESSION['admin'] = 'admin';
	
	header('Location: ../pages/admin.php');
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>