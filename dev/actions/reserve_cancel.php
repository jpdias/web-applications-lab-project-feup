<?php
try
{
	include_once('../config/init.php');
	
	include_once($BASE_DIR . 'database/items.php');

	include_once($BASE_DIR . 'database/requests.php');
	
	
	if($_POST['readerid'] != "")
	{
		if($_POST['itemid'] != "")
		{
			if($_POST['reserveid'] != "")
			{
				closeReserve($_POST['reserveid']);
			}
		}
		else
		{
			$_SESSION['error_messages'][] = 'Error cancelling reserve!';
		}
		
		
		if($_SESSION['idmanager'] != "")
		{
			header('Location: ../pages/manager_dash.php?id=' . $_SESSION['idmanager']);
		}
		else
		{
			header('Location: ../pages/user_dash.php?id=' . $_SESSION['idreader']);
		}
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>