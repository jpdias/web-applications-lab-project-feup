<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');
	
	
	$_SESSION['username'] = "";
	
	$_SESSION['idreader'] = "";
	
	$_SESSION['idmanager'] = "";
	
	session_destroy();
	
	
	if($_POST['readerid'] != "")
	{
		disableUserAccount($_POST['readerid']);
			
				
		$_SESSION['success_messages'][] = 'Account disabled successfully!';
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error disabling account!';
	}
	
	
	header('Location: ../pages/main.php');
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>