<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');
	
	
	if($_POST['itemid'] != "")
	{
		disableItem($_POST['itemid']);
			
				
		$_SESSION['success_messages'][] = 'Item disabled successfully!';
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error disabling item!';
	}
	
	
	header('Location: ../pages/manager_item.php?id=' . $_SESSION['idmanager'] . '&itemid=' . $_POST['itemid']);
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>