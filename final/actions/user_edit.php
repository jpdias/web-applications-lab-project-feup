<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');
	
	
	if($_POST['readerid'] != "")
	{
		if($_POST['address'] != "" && $_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['previouspassword'] != "" && $_POST['newpassword'] != "")
		{
			$error = 0;

			
			$result = getUserById($_POST['readerid']);
			
			
			
			$i = 0;

			while($i < count($result))
			{
				if(sha1($_POST['previouspassword']) != $result[$i]['password'])
				{
					$error = 1;
				}
				
				
				++$i;
			}
			
			
			$i = 0;
			

			if($error != 0)
			{
				if($error == 1)
				{
					$_SESSION['error_messages'][] = 'Wrong previous password!';
				}
			}
			else
			{
				editUser($_POST['readerid'], $_POST['newpassword'], $_POST['address'], $_POST['firstname'], $_POST['lastname']);
				
				
				$_SESSION['success_messages'][] = 'Profile details edited successfully!';
			}
		}
		else
		{
			if($_POST['address'] != "" && $_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['previouspassword'] == "" && $_POST['newpassword'] == "")
			{
				$result = getUserById($_SESSION['idreader']);
				
				
				editUserExceptPassword($_POST['readerid'], $_POST['address'], $_POST['firstname'], $_POST['lastname']);
				
				
				$_SESSION['success_messages'][] = 'Profile details edited successfully!';
			}
			else
			{
				if($_POST['previouspassword'] != "" && isset($_POST['newpassword']) == "")
				{
					$_SESSION['error_messages'][] = 'New password missing!';
				}
				else
				{
					if($_POST['previouspassword'] == "" && isset($_POST['newpassword']) != "")
					{
						$_SESSION['error_messages'][] = 'Previous password missing!';
					}
				}
			}
		}
	}
	
	if($_SESSION['idmanager'] != "")
	{
		header('Location: ../pages/manager_profile.php?id=' . $_SESSION['idmanager']);
	}
	else
	{
		header('Location: ../pages/user_profile.php?id=' . $_SESSION['idreader']);
	}
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>