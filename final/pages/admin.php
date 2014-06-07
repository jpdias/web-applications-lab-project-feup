<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  
  if($_SESSION['admin'] == 'admin')
  {
    $smarty->display('common/admin_header.tpl');
	
	
	$users = null;

	try
	{
		$users = getAllUsers();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
	
	$smarty->assign('users', $users);
	
	
	$smarty->display('main/admin.tpl');
  
    $smarty->display('common/footer.tpl');
	
	
	$_SESSION['admin'] = '';
  }
  else
  {
	header('Location: ../pages/signin.php');
  }
  
  
?>