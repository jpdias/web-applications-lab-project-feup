<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');
	
	
	if($_POST['readerid'] != "")
	{
		disableUserAccount($_POST['readerid']);
			
				
		$_SESSION['success_messages'][] = 'Account disabled successfully!';
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error disabling account!';
	}
	
	
	header('Location: ../pages/manager_user.php?id=' . $_SESSION['idmanager'] . '&readerid=' . $_POST['readerid']);
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>