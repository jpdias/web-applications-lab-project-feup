<?php
try
{
include_once('../config/init.php');


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
			$stmt = $conn->prepare('insert into reader values (:idreader, :username, :password, :city, :birthdate, :email, :firstname, :lastname, \'active\')');
			$stmt->bindParam(':idreader', $idreader, PDO::PARAM_INT);
			$stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
			$stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
			$stmt->bindParam(':city', $_POST['city'], PDO::PARAM_STR);
			$stmt->bindParam(':birthdate', $_POST['birthdate'], PDO::PARAM_STR);
			$stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
			$stmt->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
			$stmt->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
			$stmt->execute();
			
			echo '<script language="javascript">';
			echo 'alert("Novo utilizador registado com sucesso!")';
			echo '</script>';
			
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../pages/index.html">';    
			
			exit;
		}
	}
}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>