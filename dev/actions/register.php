<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');


	$idreader = 0;

	if (isset($_POST['email']))
	{
		$error = 0;

		
		$result = getAllUsers();


		$i = 0;

		// check if email already exists
		while($i < count($result))
		{
			if($_POST['email'] == $result[$i]['email'])
			{
				$error = 1;
			}
			
			++$i;
		}

		// check if username already exists
		$explodeEmail = explode('@', $_POST['email']);
			
		$username = $explodeEmail[0];
		
		if($error == 0)
		{
			if($username == $result[$i]['username'])
			{
				$error = 2;
			}
			
			++$i;
		}


		$idreader = $i + 1;


		if($error != 0)
		{
			if($error == 1)
			{
				$_SESSION['error_messages'][] = 'Email already registered!';
			}
			
			if($error == 2)
			{
				$_SESSION['error_messages'][] = 'Username already registered!';
			}
		}
		else
		{
			$explodeEmail = explode('@', $_POST['email']);
			
			$username = $explodeEmail[0];
			
			
			registerUser($idreader, $username, $_POST['password'], $_POST['city'], $_POST['birthdate'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
			
			
			$_SESSION['success_messages'][] = 'User successfully registered!';
			
			
			$from = "no-reply@gestorax.com";
			
			$subject = "Registration confirmation";
			
			$message = "Hello $username,\n\nThank you for your registration!\n\nSincerely,\nGestorax Team";
			
			$message = wordwrap($message, 1000);
			
			mail($_POST['email'], $subject, $message, "From: $from\n");
		}
		
		
		header('Location: ../pages/main.php');
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>