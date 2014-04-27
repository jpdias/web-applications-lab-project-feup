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
				echo '<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><script src="../javascript/jquery.min.js"></script><script src="../javascript/bootstrap.min.js"></script><script src="../javascript/bootbox.min.js"></script><script>$(document).ready(function() {bootbox.alert("Email ja registado!", function() {self.location="../pages/signup.php";});});</script>';
			}
		}
		else
		{
			$explodeEmail = explode('@', $_POST['email']);
			
			$username = $explodeEmail[0];
			
			
			registerUser($idreader, $username, $_POST['password'], $_POST['city'], $_POST['birthdate'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
			
			
			echo '<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"><script src="../javascript/jquery.min.js"></script><script src="../javascript/bootstrap.min.js"></script><script src="../javascript/bootbox.min.js"></script><script>$(document).ready(function() {bootbox.alert("Novo utilizador registado com sucesso!", function() {self.location="../pages/main.php";});});</script>';
		}
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>