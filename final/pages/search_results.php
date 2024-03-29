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
		if (isset($_GET['tags']) && $_GET['tags'] != '')
		{
			$starttime = microtime(true);
			
			
			if(isset($_GET['onlyavailableitems']))
			{
				$result = getAllItemsByTags($_GET['tags'], $_GET['onlyavailableitems']);
			}
			else
			{
				$result = getAllItemsByTags($_GET['tags'], "no");
			}
			
			
			$endtime = microtime(true);
			
			
			$timeelapsed = $endtime - $starttime;
			
			
			$resultCount = count($result);
			
			$resultParameter = $_GET['tags'];
			
			$resultTimeElapsed = $timeelapsed;
		}
		else
		{
			if (isset($_GET['itemnumber']) && $_GET['itemnumber'] != '')
			{
				$starttime = microtime(true);
			
				if(isset($_GET['onlyavailableitems']))
				{
					$result = getAllItemsByItemNumber($_GET['itemnumber'], $_GET['onlyavailableitems']);
				}
				else
				{
					$result = getAllItemsByItemNumber($_GET['itemnumber'], "no");
				}
			
			
				$endtime = microtime(true);
			
			
				$timeelapsed = $endtime - $starttime;
				
				
				$resultCount = count($result);
			
				$resultParameter = $_GET['itemnumber'];
			
				$resultTimeElapsed = $timeelapsed;
			}
		}
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}

	$smarty->assign('results', $result);
	
	$smarty->assign('resultsCount', $resultCount);
	
	$smarty->assign('resultsParameter', $resultParameter);
	
	$resultTimeElapsed = number_format((float) $resultTimeElapsed, 2, '.', '');
	
	$smarty->assign('resultsTimeElapsed', $resultTimeElapsed);
	
	$smarty->assign('readerid', $_SESSION['idreader']);
  
 
    $smarty->display('search/search_results.tpl');
   
    $smarty->display('common/footer.tpl');
?>