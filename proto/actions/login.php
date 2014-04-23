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
					session_start();
					
					$_SESSION['id'] = $result[$i]['email'];
					
					
					$error = 0;
				}
				else
					$error = 2;
			}
		}


		if($error != 0)
		{
			if($error == 1)
				echo '<h3>Erro: O email não se encontra registado!</h3>';
				
			if($error == 2)
				echo '<h3>Erro: Password errada!</h3>';
		}
		else
		{
			header("Location: ../pages/main.php");

			exit();
		}
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>