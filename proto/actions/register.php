<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/users.php');


	$idreader = 0;

	if (isset($_POST['email']))
	{
		$error = 0;

		
		$result = getAllUsersEmails();


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
				echo '<script language="javascript">';
				echo 'alert("Erro: Email já registado!")';
				echo '</script>';
				
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../pages/signup.html">';    
			
				exit;
			}
		}
		else
		{
			$explodeEmail = explode('@', $_POST['email']);
			
			$username = $explodeEmail[0];
			
			
			registerUser($idreader, $username, $_POST['password'], $_POST['city'], $_POST['birthdate'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
			
			
			echo '<script language="javascript">';
			echo 'alert("Novo utilizador registado com sucesso!")';
			echo '</script>';
			
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../pages/main.php">';    
			
			exit;
		}
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>