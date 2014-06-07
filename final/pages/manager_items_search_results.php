<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/items.php');
  
  
  $smarty->display('common/header.tpl');
  
  
  $result = null;
  
  $resultCount = null;
  
  $resultParameter = null;
  
  $resultTimeElapsed = null;
  
  
	try
	{
		if (isset($_GET['searchtype']) && $_GET['searchtype'] != '')
		{
			if($_GET['searchtype'] == "itemnumber")
			{
				$result = getAllItemsByItemNumber($_GET['searchfield'], "no");
			}
			else
			{
				if($_GET['searchtype'] == "tags")
				{
					$result = getAllItemsByTags($_GET['searchfield'], "no");
				}
				else
				{
					if($_GET['searchtype'] == "description")
					{
						$result = getAllItemsByItemDescription($_GET['searchfield'], "no");
					}
				}
			}
		}
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}

	$smarty->assign('results', $result);
	
	$smarty->assign('readerid', $_SESSION['idreader']);
  
	
	$smarty->display('manager/sidebar_inventory.tpl');
 
    $smarty->display('manager/items_search_results.tpl');
?>