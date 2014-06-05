<?php
  include_once('../actions/logging.php');

try	{

  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/users.php');
  
  $smarty->display('common/header.tpl');
  
  $smarty->display('common/menu_logged_in.tpl'); 
  
  $result = null;
  
  
	$starttime = microtime(true);


	$result = getAllUsers();


	$endtime = microtime(true);


	$timeelapsed = $endtime - $starttime;


	for($i = 0; $i < count($result); ++$i)
	{
		
	}


	$smarty->assign('results', $result);


		$smarty->display('manage/users.tpl');

  }
	catch (Exception $e)
	{
		// Logging class initialization
		$log = new Logging();
		 
		// set path and name of log file (optional)
		$log->lfile('../mylog.txt');
		 
		// write message to the log file
		$log->lwrite('Test message');
		$log->lwirte($e->getMessage()); 

		echo $e->getMessage();

		// close log file
		$log->lclose();
	}
?>