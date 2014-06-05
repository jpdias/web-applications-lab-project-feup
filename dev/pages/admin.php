<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  
  if($_SESSION['admin'] == 'admin')
  {
    $smarty->display('common/header.tpl');
	
	
	$activeusers = null;

	try
	{
		$activeusers = getAllActiveUsers();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
	
	$smarty->assign('activeusers', $activeusers);
	
	
	$smarty->display('main/admin.tpl');
  
    $smarty->display('common/footer.tpl');
	
	
	$_SESSION['admin'] = '';
  }
  else
  {
	header('Location: ../pages/signin.php');
  }
  
  
?>