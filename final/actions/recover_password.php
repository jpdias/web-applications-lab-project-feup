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
		$error = 0;

		
		$result = getAllUsers();
		
		
		for($i = 0; $i < count($result); ++$i)
		{
			if($_POST['email'] == $result[$i]['email'])
			{
				$explodeEmail = explode('@', $_POST['email']);
			
				$username = $explodeEmail[0];
				
				
				$newPassword = generatePassword();
				
				
				editUserPassword($result[$i]['idreader'], $newPassword);
			
			
				$from = "no-reply@gestorax.com";
			
				$subject = "Recover password";
				
				$message = "Hello $username,\n\nHere is your new password: $newPassword\n\nSincerely,\nGestorax Team";
				
				$message = wordwrap($message, 1000);
				
				mail($_POST['email'], $subject, $message, "From: $from\n");
			}
		}


		if($error != 0)
		{
			if($error == 1)
				$_SESSION['error_messages'][] = 'Email not registered!';
		}
		else
		{
			$_SESSION['success_messages'][] = 'New password sent to email!';
		}
		
		
		header('Location: ../pages/main.php');
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}

function generatePassword($length = 8)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++)
	{
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
}
?>