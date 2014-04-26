<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/items.php');
  
  
  $smarty->display('common/header.tpl');
  
  $smarty->display('common/menu_logged_out.tpl');
  
  
  $result = null;
  
  
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
			
			
			echo '<h4><small>' . count($result) . ' Result(s) for tags ' . $_GET['tags'] . ' in ' . number_format((float) $timeelapsed, 2, '.', '') . ' ms</small></h4>';


			for($i = 0; $i < count($result); ++$i)
			{
				
			}
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
				
				
				echo '<h4><small>' . count($result) . ' Result(s) for item number ' . $_GET['itemnumber'] . ' in ' . number_format((float) $timeelapsed, 2, '.', '') . ' ms</small></h4>';


				for($i = 0; $i < count($result); ++$i)
				{
					
				}
			}
		}
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}

	$smarty->assign('results', $result);
  
  $smarty->display('search/search_results.tpl');
   
  $smarty->display('common/footer.tpl');
?>