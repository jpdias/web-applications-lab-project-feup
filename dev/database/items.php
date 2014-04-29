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

function getAllItemsByOrderAscending()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idItem, name, image, description, qrcode, currentstatus
		from item
		order by idItem asc');
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

function getAllItemsByOrderDescending()
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idItem, name, image, description, qrcode, currentstatus
		from item
		order by idItem desc');
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

function getItemById($iditem)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('
		select idItem, name, image, description, qrcode, currentstatus
		from item
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

function editItem($iditem, $name, $description)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('update item
		set name=:name, description=:description
		where idItem=' . $iditem . '');
		$stmt->bindParam(':name', $name, PDO::PARAM_STR);
		$stmt->bindParam(':description', $description, PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}

function addItem($iditem, $name, $description)
{
    global $conn;
    
	try
	{
		$stmt = $conn->prepare('insert into item values(:iditem, :name, null, :description, null, \'available\', 1)');
		$stmt->bindParam(':iditem', $iditem, PDO::PARAM_STR);
		$stmt->bindParam(':name', $name, PDO::PARAM_STR);
		$stmt->bindParam(':description', $description, PDO::PARAM_STR);
		$stmt->execute();
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}
?>