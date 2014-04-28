<?php

function getAllUsers()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idReader, username, password, address, birthdate, email, firstname, lastname, currentstatus
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

function registerUser($idreader, $username, $password, $address, $birthdate, $email, $firstname, $lastname)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('insert into reader values (:idreader, :username, :password, :address, :birthdate, :email, :firstname, :lastname, \'active\')');
		$stmt->bindParam(':idreader', $idreader, PDO::PARAM_INT);
		$stmt->bindParam(':username', $username, PDO::PARAM_STR);
		$stmt->bindParam(':password', sha1($password), PDO::PARAM_STR);
		$stmt->bindParam(':address', $address, PDO::PARAM_STR);
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

function editUser($idreader, $username, $password, $address, $birthdate, $email, $firstname, $lastname)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('update reader
		set idReader=:idreader, username=:username, password=:password, address=:address, birthdate=:birthdate, email=:email, firstname=:firstname, lastname=:lastname
		where idReader=' . $idreader . '');
		$stmt->bindParam(':idreader', $idreader, PDO::PARAM_INT);
		$stmt->bindParam(':username', $username, PDO::PARAM_STR);
		$stmt->bindParam(':password', sha1($password), PDO::PARAM_STR);
		$stmt->bindParam(':address', $address, PDO::PARAM_STR);
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

function getUserById($idreader)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idReader, username, address, birthdate, email, firstname, lastname, currentstatus
		from reader
		where idReader=' . $idreader . '');
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

function getAllUserRequests($idreader)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select reader.idReader, reader.username, requisition.idRequisition, requisition.initialdate, requisition.finaldate, requisition.currentstatus, requisition.idItem, item.name
		from reader, requisition, item
		where reader.idReader=' . $idreader . ' and ' . 'requisition.idReader=' . $idreader . ' and ' . 'item.idItem=' . 'requisition.idItem' . '');
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
?>