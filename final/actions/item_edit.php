<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');
	
	
	if($_POST['itemid'] != "")
	{
		if($_POST['itemname'] != "" && $_POST['itemdescription'] != "")
		{
			editItem($_POST['itemid'], $_POST['itemname'], $_POST['itemdescription']);
			
				
			$_SESSION['success_messages'][] = 'Item details edited successfully!';
		}
		else
		{
			$result = getItemById($_POST['itemid']);
				
				
			$i = 0;
			
			
			if($_POST['itemname'] != "" && $_POST['itemdescription'] == "")
			{
				editItem($_POST['itemid'], $_POST['itemname'], $result[$i]['description']);
				
					
				$_SESSION['success_messages'][] = 'Item details edited successfully!';
			}
			else
			{
				if($_POST['itemname'] == "" && $_POST['itemdescription'] != "")
				{
					editItem($_POST['itemid'], $result[$i]['name'], $_POST['itemdescription']);
					
						
					$_SESSION['success_messages'][] = 'Item details edited successfully!';
				}
			}
		}
	}
	
	
	header('Location: ../pages/manager_item.php?id=' . $_SESSION['idmanager'] . '&itemid=' . $_POST['itemid']);
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>