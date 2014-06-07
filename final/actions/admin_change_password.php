<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');
	
	
	if($_POST['password'] != "")
	{
		$idadmin = 1;
	
		editAdminPassword($idadmin, $_POST['password']);
		
		
		$_SESSION['success_messages'][] = 'Admin password changed successfully!';
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error changing admin password!';
	}
	
	
	header('Location: ../pages/admin.php');
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>