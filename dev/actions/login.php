<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');


	$email = $_POST['email'];

	$password = $_POST['password'];


	$idreader = 0;

	if (isset($_POST['email']))
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
		
		
		header('Location: ../pages/main.php');
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>