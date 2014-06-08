<?php
  include_once('../config/init.php');

  include_once($BASE_DIR . 'database/requests.php');
  include_once($BASE_DIR . 'database/alerts.php');
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idmanager'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('manager/sidebar_alerts.tpl');
	  
	  
	  $alerts = null;
	  $requests = null;
	  
	  try
		{
			$alerts = getAllAlerts();
			
			$requests = getAllRequests();
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('alerts', $alerts);
		
		$smarty->assign('requests', $requests);

	  $smarty->display('manager/alerts.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>