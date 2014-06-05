<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');
	
	
	echo($_POST['readeridinput']);
	
	
	if($_POST['readeridinput'] != "")
	{
		if($_POST['permissions'] != "")
		{
			changeUserPermissions($_POST['readeridinput'], $_POST['permissions']);
				
					
			$_SESSION['success_messages'][] = 'Account permissions changed successfully! Please sign out and sign in again.';
		}
		else
		{
			$_SESSION['error_messages'][] = 'Error changing account permissions!';
		}
	}
	else
	{
		if($_POST['readeridinput1'] != "")
		{
			if($_POST['permissions'] != "")
			{
				changeUserPermissions($_POST['readeridinput1'], $_POST['permissions']);
					
						
				$_SESSION['success_messages'][] = 'Account permissions changed successfully! Please sign out and sign in again.';
			}
			else
			{
				$_SESSION['error_messages'][] = 'Error changing account permissions!';
			}
		}
		else
		{
			$_SESSION['error_messages'][] = 'Error changing account permissions!';
		}
	}
	
	
	header('Location: ../pages/admin.php');
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>