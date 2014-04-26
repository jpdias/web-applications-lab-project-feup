<?php

function getAllUsers()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idReader, username, address, birthdate, email, firstname, lastname, currentstatus
		from reader');
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();
		
		
		return $result;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}


function getUserById($readerid)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idReader, username, address, birthdate, email, firstname, lastname, currentstatus
		from reader
		where idReader=' . $readerid . '');
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();
		
		
		return $result;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function getAllUsersEmails()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select email
		from reader');
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();
		
		
		return $result;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function getAllUsersEmailsAndPasswords()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select email, password
		from reader');
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();
		
		
		return $result;
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function registerUser($idreader, $username, $password, $city, $birthdate, $email, $firstname, $lastname)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('insert into reader values (:idreader, :username, :password, :city, :birthdate, :email, :firstname, :lastname, \'active\')');
		$stmt->bindParam(':idreader', $idreader, PDO::PARAM_INT);
		$stmt->bindParam(':username', $username, PDO::PARAM_STR);
		$stmt->bindParam(':password', sha1($password), PDO::PARAM_STR);
		$stmt->bindParam(':city', $city, PDO::PARAM_STR);
		$stmt->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
		$stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}
?>