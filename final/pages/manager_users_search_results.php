<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  
  $smarty->display('common/header.tpl');
  
  
  $result = null;
  
  $resultCount = null;
  
  $resultParameter = null;
  
  $resultTimeElapsed = null;
  
  
	try
	{
		if (isset($_GET['searchtype']) && $_GET['searchtype'] != '')
		{
			if($_GET['searchtype'] == "readerid")
			{
				$result = getAllUsersByReaderId($_GET['searchfield'], "no");
			}
			else
			{
				if($_GET['searchtype'] == "name")
				{
					$result = getAllUsersByName($_GET['searchfield'], "no");
				}
				else
				{
					if($_GET['searchtype'] == "email")
					{
						$result = getAllUsersByEmail($_GET['searchfield'], "no");
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
  
	
	$smarty->display('manager/sidebar_users.tpl');
 
    $smarty->display('manager/users_search_results.tpl');
?>