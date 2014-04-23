<?php

function getAllItemsByTags()
{
    global $conn;
    
	try
	{
		$whereStmt = "";


		$tag = strtok($_GET['tags'], ",");
		
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
		
		
		if(isset($_GET['onlyavailableitems']) && $_GET['onlyavailableitems'] == "yes")
		{
			$whereStmt = $whereStmt . ' and currentstatus = ' . '\'available\'';
		}
		
		
		if($whereStmt != "")
		{
			$whereStmt = $whereStmt . ')';
		}
		
		
		$starttime = microtime(true);
		
		
		$stmt = $conn->prepare('
		select name, image, description, qrcode, currentstatus
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

function getAllItemsByItemNumber()
{
    global $conn;
    
	try
	{
		$whereStmt = "";


		$whereStmt = ' where (idItem = ' . $_GET['itemnumber'];
		
		
		if(isset($_GET['onlyavailableitems']) && $_GET['onlyavailableitems'] == "yes")
		{
			$whereStmt = $whereStmt . ' and currentstatus = ' . '\'available\'';
		}
		
		
		if($whereStmt != "")
		{
			$whereStmt = $whereStmt . ')';
		}
		
		
		$starttime = microtime(true);
		
		
		$stmt = $conn->prepare('
		select name, image, description, qrcode, currentstatus
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