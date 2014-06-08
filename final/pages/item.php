<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/items.php');
  
  include_once($BASE_DIR . 'database/requests.php');
  
  
  $smarty->display('common/header.tpl');
	  
	  
  $items = null;

	try
	{
		if (isset($_GET['itemid']) && $_GET['itemid'] != '')
		{
			$items = getItemById($_GET['itemid'], $_GET['onlyavailableitems']);
			
			$requests = getAllOpenRequestsByItemId($_GET['itemid']);
			
			echo(count($requests));
		}
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
	
	$smarty->assign('items', $items);
	
	$smarty->assign('readerid', $_SESSION['idreader']);
	
	$smarty->assign('managerid', $_SESSION['idmanager']);
	
	$smarty->assign('requestsopencount', count($requests));
  
  
  $smarty->display('main/item.tpl');
  
  $smarty->display('common/footer.tpl');
?>