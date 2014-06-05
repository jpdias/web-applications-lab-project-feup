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

function getAllActiveUsers()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idReader, username, password, address, birthdate, email, firstname, lastname, currentstatus
		from reader
		where currentstatus=\'active\' 
		order by idReader asc');
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

function getAllNewUsers()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idReader, username, password, address, birthdate, email, firstname, lastname, currentstatus
		from reader
		order by idReader desc');
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

function getUserById($idreader)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idReader, username, password, address, birthdate, email, firstname, lastname, currentstatus
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
		select reader.idReader, reader.username, requisition.idRequisition, requisition.comment, requisition.initialdate, requisition.finaldate, requisition.deliverydate, requisition.currentstatus, requisition.idItem, item.name
		from reader, requisition, item
		where reader.idReader=' . $idreader . ' and ' . 'requisition.idReader=' . $idreader . ' and ' . 'item.idItem=' . 'requisition.idItem' . ' ' .
		'order by requisition.idRequisition desc');
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

function getAllUserReserves($idreader)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select reader.idReader, reader.username, reserve.idReserve, reserve.reservedate, reserve.expiredate, reserve.currentstatus, reserve.idItem, item.name, item.currentstatus as itemcurrentstatus
		from reader, reserve, item
		where reader.idReader=' . $idreader . ' and ' . 'reserve.idReader=' . $idreader . ' and ' . 'item.idItem=' . 'reserve.idItem' . ' ' .
		'order by reserve.idReserve desc');
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

function getAllManagers()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idManager, idReader
		from manager');
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

function editUser($idreader, $password, $address, $firstname, $lastname)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('update reader
		set idReader=:idreader, password=:password, address=:address, firstname=:firstname, lastname=:lastname
		where idReader=' . $idreader . '');
		$stmt->bindParam(':idreader', $idreader, PDO::PARAM_INT);
		$stmt->bindParam(':password', sha1($password), PDO::PARAM_STR);
		$stmt->bindParam(':address', $address, PDO::PARAM_STR);
		$stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
		$stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function editUserExceptPassword($idreader, $address, $firstname, $lastname)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('update reader
		set idReader=:idreader, address=:address, firstname=:firstname, lastname=:lastname
		where idReader=' . $idreader . '');
		$stmt->bindParam(':idreader', $idreader, PDO::PARAM_INT);
		$stmt->bindParam(':address', $address, PDO::PARAM_STR);
		$stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
		$stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function editUserPassword($idreader, $password)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('update reader
		set password=:password
		where idReader=' . $idreader . '');
		$stmt->bindParam(':password', sha1($password), PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function disableUserAccount($idreader)
{
    global $conn;
	
	$disabled = 'closed';
    
	try
	{
		$stmt = $conn->prepare('update reader
		set currentstatus=:currentstatus
		where idReader=' . $idreader . '');
		$stmt->bindParam(':currentstatus', $disabled, PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function changeUserPermissions($idreader, $permissions)
{
    global $conn;
	
	if($permissions == 'manager')
	{
		try
		{
			$stmt = $conn->prepare('
			select idManager
			from manager');
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			
			$idManager = count($result) + 1;
		
			$stmt = $conn->prepare('insert into manager values (:idManager, 1, :idReader)');
			$stmt->bindParam(':idManager', $idManager, PDO::PARAM_STR);
			$stmt->bindParam(':idReader', $idreader, PDO::PARAM_STR);
			$stmt->execute();
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
	}
	else
	{
		try
		{
			$stmt = $conn->prepare('delete from manager
			where idReader=' . $idreader . '');
			$stmt->execute();
		}
		catch (Exception $e)
		{
			echo $e->getMessage();
		}
	}
}

function getAllAdmins()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idAdmin, username, password
		from admin');
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

function editAdminPassword($idadmin, $password)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('update admin
		set password=:password
		where idAdmin=' . $idadmin . '');
		$stmt->bindParam(':password', sha1($password), PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}
?>