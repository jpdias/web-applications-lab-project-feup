<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/requests.php');
  include_once($BASE_DIR . 'database/alerts.php');
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idreader'])
	{
	  $smarty->display('common/header.tpl');
	  $smarty->display('user/sidebar_statistics.tpl');
	  
	  	try
		{
			$alerts =  getReaderAlerts($_GET['id']);
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
	 
		$smarty->assign('alerts', $alerts);
		
		$smarty->display('user/alerts.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>