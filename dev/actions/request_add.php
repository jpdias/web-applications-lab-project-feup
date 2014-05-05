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
			$requestid = count(getAllRequests()) + 1;
			
			
			$initialdate = date('Y-m-d', time());
			
			$finaldate = date('Y-m-d', strtotime($initialdate. ' + 7 days'));
			
			
			openRequest($requestid, $_POST['comment'], $initialdate, $finaldate, $_POST['readerid'], $_POST['itemid']);
			
			
			unavailableItem($_POST['itemid']);
				
					
			$_SESSION['success_messages'][] = 'Request made successfully!';
		}
		else
		{
			$_SESSION['error_messages'][] = 'Error making request!';
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