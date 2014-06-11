<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');
	
	include_once($BASE_DIR . 'database/users.php');
	
	include_once($BASE_DIR . 'database/requests.php');


	$idreader = 0;

	if (isset($_POST['email']))
	{
		$allAdmins = getAllAdmins();
	
		if($_POST['email'] == 'admin' && sha1($_POST['password']) == $allAdmins[0]['password'])
		{
			$_SESSION['admin'] = 'admin';
			
			
			header('Location: ../pages/admin.php');
		}
		else
		{
			$error = 1;

			
			$result = getAllUsers();
			
			
			for($i = 0; $i < count($result); ++$i)
			{
				if($_POST['email'] == $result[$i]['email'])
				{
					if($result[$i]['currentstatus'] == 'active')
					{
						if(sha1($_POST['password']) == $result[$i]['password'])
						{
							$_SESSION['username'] = $result[$i]['username'];
							
							$_SESSION['idreader'] = $result[$i]['idreader'];
							
							
							$managers = getAllManagers();
							
							
							for($j = 0; $j < count($managers); ++$j)
							{
								if($result[$i]['idreader'] == $managers[$j]['idreader'])
								{
									$_SESSION['idmanager'] = $managers[$j]['idmanager'];
									
									
									break;
								}
							}
							
							
							$_SESSION['success_messages'][] = 'Login successful!';
							
							
							$error = 0;
						}
						else
							$error = 2;
					}
					else
					{
						$error = 3;
					}
				}
			}


			if($error != 0)
			{
				if($error == 1)
					$_SESSION['error_messages'][] = 'Email not registered!';  
					
				if($error == 2)
					$_SESSION['error_messages'][] = 'Wrong password!'; 
					
				if($error == 3)
					$_SESSION['error_messages'][] = 'Account blocked or disabled!'; 
			}
			else
			{
				$allReserves = getAllReserves();
				
				$todaydate = date('Y-m-d', time());
				
				
				$k = 0;
				
				while($k < count($allReserves))
				{
					$expiredate = $allReserves[$k]['expiredate'];
					
					$reserveid = $allReserves[$k]['idreserve'];
					
					$itemid = $allReserves[$k]['iditem'];
					
					
					if($todaydate > $expiredate)
					{
						availableItem($itemid);
						
						closeReserve($reserveid);
					}
					
					++$k;
				}
			}
			
			
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>