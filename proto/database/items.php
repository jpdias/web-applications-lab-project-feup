<?php

function getAllItems()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idItem, name, image, description, qrcode, currentstatus
		from item');
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


function getItemById($itemid)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idItem, name, image, description, qrcode, currentstatus
		from item
		where idItem=' . $itemid . '');
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

function getAllItemsByTags($tags, $onlyavailableitems)
{
    global $conn;
    
	try
	{
		$whereStmt = "";


		$tag = strtok($tags, ",");
		
		while ($tag != false)
		{
			if($whereStmt == "")
			{
				$whereStmt = $whereStmt . ' where (name like \'%' . $tag . '%\'';
			}
			else
			{
				$whereStmt = $whereStmt . ' or name like \'%' . $tag . '%\'';
			}
			
			$tag = strtok(",");
		}
		
		
		if(isset($onlyavailableitems) && $onlyavailableitems == "yes")
		{
			$whereStmt = $whereStmt . ' and currentstatus = ' . '\'available\'';
		}
		
		
		if($whereStmt != "")
		{
			$whereStmt = $whereStmt . ')';
		}
		
		
		$starttime = microtime(true);
		
		
		$stmt = $conn->prepare('
		select idItem, name, image, description, qrcode, currentstatus
		from item' . $whereStmt);
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

function getAllItemsByItemNumber($itemnumber, $onlyavailableitems)
{
    global $conn;
    
	try
	{
		$whereStmt = "";


		$whereStmt = ' where (idItem = ' . $itemnumber . ')';
		
		
		if(isset($onlyavailableitems) && $onlyavailableitems == "yes")
		{
			$whereStmt = $whereStmt . ' and currentstatus = ' . '\'available\'';
		}
		
		
		if($whereStmt != "")
		{
			$whereStmt = $whereStmt . ')';
		}
		
		
		$starttime = microtime(true);
		
		
		$stmt = $conn->prepare('
		select idItem, name, image, description, qrcode, currentstatus
		from item' . $whereStmt);
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