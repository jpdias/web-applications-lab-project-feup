<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idreader'])
	{
  
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('user/sidebar.tpl');
	  
	  
	  $result = null;
	  
	  try
		{
			$result = getUserById($_SESSION['idreader']);


			for($i = 0; $i < count($result); ++$i)
			{
				
			}
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
		
		$smarty->assign('results', $result);
	  
	  
	  $smarty->display('user/profile.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>