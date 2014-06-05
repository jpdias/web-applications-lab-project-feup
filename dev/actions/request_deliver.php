<?php
try
{
	include_once('../config/init.php');
	
	include_once($BASE_DIR . 'database/items.php');

	include_once($BASE_DIR . 'database/requests.php');
	
	include_once($BASE_DIR . 'database/users.php');
	
	
	if($_POST['requestid'] != "")
	{
		if($_POST['itemid'] != "")
		{
			$deliverydate = date('Y-m-d', time());
			
			
			closeRequest($_POST['requestid'], $deliverydate);
			
			
			//check if there are any reserves
			if(count(getAllOpenReservesByItemId($_POST['itemid'])) > 0)
			{
				reserveItem($_POST['itemid']);
			}
			else
			{
				availableItem($_POST['itemid']);
			}
				
					
			$_SESSION['success_messages'][] = 'Delivery made successfully!';
			
			
			$user = getUserById($_SESSION['idreader']);
			
			$userEmail = $user[0]['email'];
			
			
			$item = getItemById($_POST['itemid']);
				
			$itemId = $_POST['itemid'];
			
			$itemName = $item[0]['name'];
			
			
			$from = "no-reply@gestorax.com";
			
			$subject = "Request confirmation";
			
			$message = "Hello,\n\nThis is a confirmation e-mail informing you that you delivered the following item:\nItem Id: $itemId\nItem Name: $itemName\n\n\nSincerely,\nGestorax Team";
			
			$message = wordwrap($message, 1000);
			
			mail($userEmail, $subject, $message, "From: $from\n");
			
			
			//check if there are any reserves
			if(count(getAllOpenReservesByItemId($_POST['itemid'])) > 0)
			{
				$from = "no-reply@gestorax.com";
			
				$subject = "Item reserved now available";
				
				$message = "Hello,\n\nThis is a confirmation e-mail informing you that the item you reserved is now available for you to request:\nItem Id: $itemId\nItem Name: $itemName\n\nExpire Date: $expiredate\n\nSincerely,\nGestorax Team";
				
				$message = wordwrap($message, 1000);
				
				mail($userEmail, $subject, $message, "From: $from\n");
			}
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