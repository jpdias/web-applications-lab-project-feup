<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/items.php');
  
  
  $smarty->display('common/header.tpl');
  
  $smarty->display('common/menu_logged_in.tpl');
  
  
  $result = null;
  
  try
	{
		if (isset($_GET['itemid']) && $_GET['itemid'] != '')
		{
			$starttime = microtime(true);
		
		
			$result = getItemById($_GET['itemid'], $_GET['onlyavailableitems']);
		
		
			$endtime = microtime(true);
		
		
			$timeelapsed = $endtime - $starttime;


			for($i = 0; $i < count($result); ++$i)
			{
				
			}
		}
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
	
	$smarty->assign('results', $result);
  
  
  $smarty->display('manage/item.tpl');
?>