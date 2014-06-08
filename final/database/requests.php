<?php

function getAllRequests()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select requisition.idRequisition, requisition.comment, requisition.initialdate, requisition.finaldate, requisition.deliverydate, requisition.numberofrenewals, requisition.currentstatus, requisition.idreader, requisition.iditem, item.idItem, item.name, reader.idReader, reader.username
		from requisition, item, reader
		where item.idItem=requisition.idItem and requisition.idReader=reader.idReader');
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



function openRequest($idrequisition, $comment, $initialdate, $finaldate, $idreader, $iditem)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('insert into requisition values(:idrequisition, :comment, :initialdate, :finaldate, null, 0, \'open\', :idreader, :iditem)');
		$stmt->bindParam(':idrequisition', $idrequisition, PDO::PARAM_INT);
		$stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
		$stmt->bindParam(':initialdate', $initialdate, PDO::PARAM_STR);
		$stmt->bindParam(':finaldate', $finaldate, PDO::PARAM_STR);
		$stmt->bindParam(':idreader', $idreader, PDO::PARAM_INT);
		$stmt->bindParam(':iditem', $iditem, PDO::PARAM_INT);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function closeRequest($idrequisition, $deliverydate)
{
    global $conn;
	
	$close = 'closed';
    
	try
	{
		$stmt = $conn->prepare('update requisition
		set deliverydate=:deliverydate, currentstatus=:currentstatus
		where idRequisition=' . $idrequisition . '');
		$stmt->bindParam(':deliverydate', $deliverydate, PDO::PARAM_STR);
		$stmt->bindParam(':currentstatus', $close, PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function renewRequest($idrequisition, $finaldate)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('update requisition
		set finaldate=:finaldate
		where idRequisition=' . $idrequisition . '');
		$stmt->bindParam(':finaldate', $finaldate, PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function getRequestsById($iditem)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idRequisition, comment, initialdate, finaldate, deliverydate, numberofrenewals, currentstatus, idReader, idItem
		from requisition
		where idItem=' . $iditem . '');
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

function getAllReserves()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select reserve.idReserve, reserve.reservedate, reserve.expiredate, reserve.currentstatus, reserve.idReader, reserve.idItem, item.idItem, item.name, reader.idReader, reader.username
		from reserve, item, reader
		where item.idItem=reserve.idItem and reserve.idReader=reader.idReader');
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

function getAllOpenRequestsByItemId($iditem)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select requisition.idRequisition, requisition.comment, requisition.initialdate, requisition.finaldate, requisition.deliverydate, requisition.numberofrenewals, requisition.currentstatus, requisition.idReader, requisition.idItem
		from requisition, item
		where requisition.idItem=' . $iditem . ' ');
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

function getAllOpenReservesByItemId($iditem)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select reserve.idReserve, item.idItem, item.name, reserve.reservedate, reserve.expiredate, reserve.currentstatus, reserve.idReader, reserve.idItem
		from reserve, item
		where reserve.idItem=' . $iditem . ' and ' . 'reserve.currentstatus=\'open\'');
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

function openReserve($idreserve, $reservedate, $expiredate, $idreader, $iditem)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('insert into reserve values(:idreserve, :reservedate, :expiredate, \'open\', :idreader, :iditem)');
		$stmt->bindParam(':idreserve', $idreserve, PDO::PARAM_INT);
		$stmt->bindParam(':reservedate', $reservedate, PDO::PARAM_STR);
		$stmt->bindParam(':expiredate', $expiredate, PDO::PARAM_STR);
		$stmt->bindParam(':idreader', $idreader, PDO::PARAM_INT);
		$stmt->bindParam(':iditem', $iditem, PDO::PARAM_INT);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function closeReserve($idreserve)
{
    global $conn;
	
	$close = 'closed';
    
	try
	{
		$stmt = $conn->prepare('update reserve
		set currentstatus=:currentstatus
		where idReserve=' . $idreserve . '');
		$stmt->bindParam(':currentstatus', $close, PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}
?>