<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');
	
	
	if($_POST['itemid'] != "")
	{
		if($_POST['repaircompanyid'] != "")
		{
			$repairid = count(getAllRepairs()) + 1;
			
			
			$initialdate = date('Y-m-d', time());
			
			$finaldate = date('Y-m-d', strtotime($initialdate. ' + 3 days'));
			
			
			addRepair($repairid, $initialdate, $finaldate, $_POST['reason'], $_POST['repaircompanyid'], $_POST['itemid']);
			
			
			repairItem($_POST['itemid']);
				
					
			$_SESSION['success_messages'][] = 'Item sent to repair successfully!';
		}
		else
		{
			$_SESSION['error_messages'][] = 'Error sending item to repair!';
		}
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error sending item to repair!';
	}
	
	
	header('Location: ../pages/manager_item.php?id=' . $_SESSION['idmanager'] . '&itemid=' . $_POST['itemid']);
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>