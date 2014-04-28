<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');


	if($_POST['address'] != "" && $_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['previouspassword'] != "" && $_POST['newpassword'] != "")
	{
		$error = 0;

		
		$result = getUserById($_SESSION['idreader']);
		
		
		
		$i = 0;

		while($i < count($result))
		{
			if($_POST['previouspassword'] != $result[$i]['password'])
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
				$_SESSION['error_messages'][] = 'Wrong password!';
			}
		}
		else
		{
			$email = $result[$i]['email'];
			
			$birthdate = $result[$i]['birthdate'];
			
			
			editUser($_SESSION['idreader'], $_SESSION['username'], $_POST['newpassword'], $_POST['address'], $birthdate, $email, $_POST['firstname'], $_POST['lastname']);
			
			
			$_SESSION['success_messages'][] = 'Profile details edited successfully!';
		}
	}
	else
	{
		if($_POST['address'] != "" && $_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['previouspassword'] == "" && $_POST['newpassword'] == "")
		{
			$result = getUserById($_SESSION['idreader']);
			
			
			$i = 0;
			
			
			$password = $result[$i]['password'];
			
			$email = $result[$i]['email'];
			
			$birthdate = $result[$i]['birthdate'];
			
			
			editUser($_SESSION['idreader'], $_SESSION['username'], $password, $_POST['address'], $birthdate, $email, $_POST['firstname'], $_POST['lastname']);
			
			
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
	
	
	header('Location: ../pages/user_profile.php?id=' . $_SESSION['idreader']);
	
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>