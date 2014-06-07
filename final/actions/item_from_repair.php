<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');
	
	
	if($_POST['itemid'] != "")
	{
		$repairsByItem = getRepairsByItemId($_POST['itemid']);
			
		if(count($repairsByItem) > 0)
		{
			$repairid = $repairsByItem[0]['idrepair'];
			
			
			$finaldate = date('Y-m-d', time());
			
			
			closeRepair($repairid, $finaldate);
			
			
			repairedItem($_POST['itemid']);
				
					
			$_SESSION['success_messages'][] = 'Item back from repair!';
		}
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error getting item back from repair!';
	}
	
	
	header('Location: ../pages/manager_item.php?id=' . $_SESSION['idmanager'] . '&itemid=' . $_POST['itemid']);
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>