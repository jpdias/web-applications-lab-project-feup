<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idmanager'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('manager/sidebar_users.tpl');
	  
	  
	  $activeusers = null;
	  
	  $newusers = null;
  
		try
		{
			$activeusers = getAllActiveUsers();
			
			$newusers = getAllNewUsers();
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('activeusers', $activeusers);
		
		$smarty->assign('newusers', $newusers);
	  
	  
	  $smarty->display('manager/users.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>