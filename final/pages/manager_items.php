<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/items.php');
  
  
  if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idmanager'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('manager/sidebar_inventory.tpl');
	  
	  
	  $activeitems = null;
	  
	  $newitems = null;
  
		try
		{
			$activeitems = getAllActiveItems();
			
			$newitems = getAllNewItems();
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('activeitems', $activeitems);
		
		$smarty->assign('newitems', $newitems);
	  
	  
	  $smarty->display('manager/items.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>