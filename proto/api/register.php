<?php
try
{
include_once('../config/init.php');


$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$email = $_POST['email'];

$city = $_POST['city'];

$password = $_POST['password'];

$confirmpassword = $_POST['confirmpassword'];


$idreader = 0;

	if (isset($_POST['email']))
	{
		$error = 0;

		$stmt = $conn->prepare('
		select email
		from reader');
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();


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
				echo '<h3>Erro: Email já registado!</h3>';
		}
		else
		{
			$stmt = $conn->prepare('insert into reader values (:idreader, \'username\', :password, :city, null, :email, :firstname, :lastname, \'active\')');
			$stmt->bindParam(':idreader', $idreader, PDO::PARAM_INT);
			$stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
			$stmt->bindParam(':city', $_POST['city'], PDO::PARAM_STR);
			$stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
			$stmt->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
			$stmt->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
			$stmt->execute();
			
			echo '<h3>Novo utilizador registado com sucesso!</h3>';
		}

		echo '<p><a href="../pages/signin.html"><h4>Sign In</h4></a></p>';
		echo '<p><a href="../pages/signup.html"><h4>Sign Up</h4></a></p>';
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>