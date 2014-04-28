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

		
		$result = getAllUsersEmailsAndPasswords();


		for($i = 0; $i < count($result); ++$i)
		{
			if($_POST['email'] == $result[$i]['email'])
			{
				if($_POST['password'] == $result[$i]['password'])
				{
					$_SESSION['username'] = $result[$i]['email'];
					
					$_SESSION['success_messages'][] = 'Login efetuado com sucesso!';
					
					
					$error = 0;
				}
				else
					$error = 2;
			}
		}


		if($error != 0)
		{
			if($error == 1)
				$_SESSION['error_messages'][] = 'O email não se encontra registado!';  
				
			if($error == 2)
				$_SESSION['error_messages'][] = 'Password errada!'; 
		}
		
		
		header('Location: ../pages/main.php');
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>