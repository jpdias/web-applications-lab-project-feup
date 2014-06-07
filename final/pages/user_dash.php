<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idreader'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('user/sidebar_overview.tpl');
	  
	  
	  $userRequests = null;
	  
		try
		{
			$userRequests = getAllUserRequests($_SESSION['idreader']);
			
			$userReserves = getAllUserReserves($_SESSION['idreader']);
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('userRequests', $userRequests);
		
		$smarty->assign('userReserves', $userReserves);
		
		$smarty->assign('readerid', $_SESSION['idreader']);
	  
	  
	  $smarty->display('user/dash.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>