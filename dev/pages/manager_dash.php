<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idmanager'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('manager/sidebar_overview.tpl');
	  
	  
	  $userRequests = null;
	  
	  try
		{
			$userRequests = getAllUserRequests($_SESSION['idreader']);
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('userRequests', $userRequests);
	  
	  
	  $smarty->display('manager/dash.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>