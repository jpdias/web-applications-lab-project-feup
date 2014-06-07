<?php
  include_once('../config/init.php');
  
  include_once($BASE_DIR . 'database/requests.php');
  include_once($BASE_DIR . 'database/items.php');
  
	if(isset($_GET['id']) && $_GET['id'] == $_SESSION['idmanager'])
	{
	  $smarty->display('common/header.tpl');
	  
	  $smarty->display('manager/sidebar_statistics.tpl');
	  
	  $requests = null;
	  $reserves = null;
	  $repair = null;
	  $active = null;
	  $disabled = null;
	try{
	$repair = getAllRepairItems();
	$active = getAllActiveItems();
	$disabled = getAllDisabledItems();
	}
	catch (Exception $e)
		{
			echo $e->getMessage();
		} 
	  try
	  {
			$requests = getAllRequests();
			
			$reserves = getAllReserves();
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
	$requestSize = count($requests);
	  
	$reserveSize = count($reserves);
	
	$allRequestsByMonth = array(0,0,0,0,0,0,0,0,0,0,0,0);
	$allReservesByMonth = array(0,0,0,0,0,0,0,0,0,0,0,0);
	for($i=0;$i<$reserveSize;$i++)
	{
	
	    $parts = explode('-', $reserves[$i]["initialdate"]);
		if($parts[1] == "01"){	
			$allReservesByMonth[0]++;
		}  
		else if($parts[1] == "02"){
			$allReservesByMonth[1]++;
		}  
	  else  if($parts[1] == "03"){
			$allReservesByMonth[2]++;
		}  
	   else if($parts[1] == "04"){
			$allReservesByMonth[3]++;
		}  
		else if($parts[1] == "05"){
			$allReservesByMonth[4]++;
		}  
		else if($parts[1] == "06"){
			$allReservesByMonth[5]++;
		}  
		else if($parts[1] == "07"){
			$allReservesByMonth[6]++;
		}  
		else if($parts[1] == "08"){
			$allReservesByMonth[7]++;
		}  
		else if($parts[1] == "09"){
			$allReservesByMonth[8]++;
		}  
		else if($parts[1] == "10"){
			$allReservesByMonth[9]++;
		}  
		else if($parts[1] == "11"){
			$allReservesByMonth[10]++;
		}  
		else{
			$allReservesByMonth[11]++;
		}  
	}
	for($i=0;$i<$requestSize;$i++)
	{
	
	    $parts = explode('-', $requests[$i]["initialdate"]);
		if($parts[1] == "01"){	
			$allRequestsByMonth[0]++;
		}  
		else if($parts[1] == "02"){
			$allRequestsByMonth[1]++;
		}  
	  else  if($parts[1] == "03"){
			$allRequestsByMonth[2]++;
		}  
	   else if($parts[1] == "04"){
			$allRequestsByMonth[3]++;
		}  
		else if($parts[1] == "05"){
			$allRequestsByMonth[4]++;
		}  
		else if($parts[1] == "06"){
			$allRequestsByMonth[5]++;
		}  
		else if($parts[1] == "07"){
			$allRequestsByMonth[6]++;
		}  
		else if($parts[1] == "08"){
			$allRequestsByMonth[7]++;
		}  
		else if($parts[1] == "09"){
			$allRequestsByMonth[8]++;
		}  
		else if($parts[1] == "10"){
			$allRequestsByMonth[9]++;
		}  
		else if($parts[1] == "11"){
			$allRequestsByMonth[10]++;
		}  
		else{
			$allRequestsByMonth[11]++;
		}  
	}
	$smarty->assign('disabled', count($disabled));
	$smarty->assign('active', count($active));
	$smarty->assign('repair', count($repair));
	$smarty->assign('allReq', $allRequestsByMonth);
	$smarty->assign('allRes', $allReservesByMonth);
	$smarty->assign('requestSize', $requestSize);
	$smarty->assign('reserveSize', $reserveSize);
	  
	  
	$smarty->display('manager/statistics.tpl');
	}
	else
	{
		header('Location: ../pages/signin.php');
	}
?>