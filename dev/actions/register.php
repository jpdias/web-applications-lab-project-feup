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

		while($i < count($result))
		{
			if($_POST['email'] == $result[$i]['email'])
			{
				$error = 1;
			}
			
			
			++$i;
		}


		$idreader = $i + 1;


		if($error != 0)
		{
			if($error == 1)
			{
				$_SESSION['error_messages'][] = 'Email ja registado!';
			}
		}
		else
		{
			$explodeEmail = explode('@', $_POST['email']);
			
			$username = $explodeEmail[0];
			
			
			registerUser($idreader, $username, $_POST['password'], $_POST['city'], $_POST['birthdate'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
			
			
			$_SESSION['success_messages'][] = 'Utilizador registado com sucesso!';
			
			
			$from = "info@gestorax.com";
			
			$subject = "Registration confirmation";
			
			$message = "Hello!";
			
			$message = wordwrap($message, 70);
			
			mail("jpdias@outlook.com", $subject, $message, "From: $from\n");
		}
}
?>
		}
		
		
		header('Location: ../pages/main.php');
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>