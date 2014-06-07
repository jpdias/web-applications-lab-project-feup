<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/items.php');
  
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idmanager'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('manager/sidebar_inventory.tpl');
	  
	  
	  $items = null;
	  
	  $repairCompanies = null;
  
		try
		{
			if (isset($_GET['itemid']) && $_GET['itemid'] != '')
			{
				$items = getItemById($_GET['itemid'], $_GET['onlyavailableitems']);
				
				$repairCompanies = getAllRepairCompanies();
			}
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('items', $items);
		
		$smarty->assign('repairCompanies', $repairCompanies);
	  
	  
	  $smarty->display('manager/item.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>