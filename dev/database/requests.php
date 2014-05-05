<?php

function getAllRequests()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select requisition.idRequisition, item.idItem, item.name, requisition.comment, requisition.initialdate, requisition.finaldate, requisition.deliverydate, requisition.numberofrenewals, requisition.currentstatus, requisition.idReader, requisition.idItem
		from requisition, item
		where item.idItem=requisition.idItem');
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
		$stmt->bindParam(':idreader', $idreader, PDO::PARAM_STR);
		$stmt->bindParam(':iditem', $iditem, PDO::PARAM_STR);
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

function getAllReserves()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select reserve.idReserve, item.idItem, item.name, reserve.reservedate, reserve.expiredate, reserve.currentstatus, reserve.idReader, reserve.idItem
		from reserve, item
		where item.idItem=reserve.idItem');
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