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
			if(count(getAllOpenReservesByItemId($_POST['itemid'])) > 0)
			{
				$_SESSION['error_messages'][] = 'Sorry, the item is already reserved!';
			}
			else
			{
				$requests = getRequestsById($_POST['itemid']);
				
				$cannotReserve = 0;
				
				for($i = 0; $i < count($requests); ++$i)
				{
					if($requests[$i]['idreader'] == $_POST['readerid'] && $requests[$i]['currentstatus'] == 'open')
					{
						$cannotReserve = 1;
					}
				}
				
				if($cannotReserve == 1)
				{
					$_SESSION['error_messages'][] = 'Sorry, you have this item so you cannot reserve it!';
				}
				else
				{
					$reserveid = count(getAllReserves()) + 1;
					
					
					$reservedate = date('Y-m-d', time());
					
					$expiredate = date('Y-m-d', strtotime($initialdate. ' + 2 days'));
					
					
					openReserve($reserveid, $reservedate, $expiredate, $_POST['readerid'], $_POST['itemid']);
						
							
					$_SESSION['success_messages'][] = 'Reserve made successfully!';
					
					
					$user = getUserById($_SESSION['idreader']);
			
				$userEmail = $user[0]['email'];
				
				
				$item = getItemById($_POST['itemid']);
				
				$itemId = $_POST['itemid'];
				
				$itemName = $item[0]['name'];
				
				
				$from = "no-reply@gestorax.com";
				
				$subject = "Reserve confirmation";
				
				$message = "Hello,\n\nThis is a confirmation e-mail informing you that you reserved the following item:\nItem Id: $itemId\nItem Name: $itemName\n\nExpire Date: $expiredate\n\nSincerely,\nGestorax Team";
				
				$message = wordwrap($message, 1000);
				
				mail($userEmail, $subject, $message, "From: $from\n");
				}
			}
		}
		else
		{
			$_SESSION['error_messages'][] = 'Error making reserve!';
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