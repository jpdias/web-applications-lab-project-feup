<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/requests.php');
  
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idmanager'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('manager/sidebar_overview.tpl');
	  
	  
	  $requests = null;
	  
	  $reserves = null;
	  
	    try
		{
			$requests = getAllRequests();
			
			$reserves = getAllReserves();
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('requests', $requests);
		
		$smarty->assign('reserves', $reserves);
	  
	  
	  $smarty->display('manager/requests.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>