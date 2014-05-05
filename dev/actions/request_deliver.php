<?php
try
{
	include_once('../config/init.php');
	
	include_once($BASE_DIR . 'database/items.php');

	include_once($BASE_DIR . 'database/requests.php');
	
	
	if($_POST['requestid'] != "")
	{
		if($_POST['itemid'] != "")
		{
			$deliverydate = date('Y-m-d', time());
			
			
			closeRequest($_POST['requestid'], $deliverydate);
			
			
			availableItem($_POST['itemid']);
				
					
			$_SESSION['success_messages'][] = 'Delivery made successfully!';
		}
		else
		{
			$_SESSION['error_messages'][] = 'Error making delivery!';
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
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>