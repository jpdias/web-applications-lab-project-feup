<?php

function getAllAlerts()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select item.name,reader.username, alert.content, alert.createdon
		from alert,item,reader 
		where alert.idItem = item.idItem AND alert.idReader=reader.idReader');
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

function getReaderAlerts($idReader)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select item.name,reader.username, alert.content, alert.createdon
		from alert,item,reader 
		where alert.idItem = item.idItem AND alert.idReader=reader.idReader AND alert.idReader='.$idReader.'');
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