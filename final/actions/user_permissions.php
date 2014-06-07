<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');
	
	
	if($_POST['readerid'] != "")
	{
		if($_POST['permissions'] != "")
		{
			changeUserPermissions($_POST['readerid'], $_POST['permissions']);
				
					
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
	
	
	header('Location: ../pages/manager_user.php?id=' . $_SESSION['idmanager'] . '&readerid=' . $_POST['readerid']);
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>