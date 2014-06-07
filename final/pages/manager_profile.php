<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idmanager'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('manager/sidebar_profile.tpl');
	  
	  
	  $users = null;
	  
	  try
		{
			$users = getUserById($_SESSION['idreader']);
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('users', $users);
	  
	  
	  $smarty->display('manager/profile.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>