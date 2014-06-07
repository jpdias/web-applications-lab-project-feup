<?php
try
{
	include_once('../config/init.php');
	
	include_once($BASE_DIR . 'database/items.php');

	include_once($BASE_DIR . 'database/requests.php');
	
	include_once($BASE_DIR . 'database/users.php');
	
	
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
			
			
			$user = getUserById($_SESSION['idreader']);
			
			$userEmail = $user[0]['email'];
			
			
			$item = getItemById($_POST['itemid']);
				
			$itemId = $_POST['itemid'];
			
			$itemName = $item[0]['name'];
			
			
			$from = "no-reply@gestorax.com";
			
			$subject = "Request confirmation";
			
			$message = "Hello,\n\nThis is a confirmation e-mail informing you that you requested the following item:\nItem Id: $itemId\nItem Name: $itemName\n\nDelivery Date: $finaldate\n\nSincerely,\nGestorax Team";
			
			$message = wordwrap($message, 1000);
			
			mail($userEmail, $subject, $message, "From: $from\n");
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