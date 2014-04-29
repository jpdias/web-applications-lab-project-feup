<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idmanager'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('manager/sidebar_users.tpl');
	  
	  
	  $users = null;
  
		try
		{
			if (isset($_GET['readerid']) && $_GET['readerid'] != '')
			{
				$users = getUserById($_GET['readerid']);
				
				$usersRequests = getAllUserRequests($_GET['readerid']);
			}
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('users', $users);
		
		$smarty->assign('usersRequests', $usersRequests);
	  
	  
	  $smarty->display('manager/user.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>