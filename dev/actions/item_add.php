<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');
	
	
	if($_POST['itemname'] != "" && $_POST['itemdescription'] != "")
	{
		$itemid = count(getAllItems()) + 1;
		
		
		addItem($itemid, $_POST['itemname'], $_POST['itemdescription']);
		
			
		$_SESSION['success_messages'][] = 'Item added successfully!';
	}
	else
	{
		$_SESSION['error_messages'][] = 'Error adding item!';
	}
	
	
	header('Location: ../pages/manager_items.php?id=' . $_SESSION['idmanager'] . '');
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>