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

function createAlert($idalert,$content, $createdon, $idReader,$iditem )
{
    global $conn;

  try
  {
    $stmt = $conn->prepare('insert into alert (idalert,content,createdon,idReader,catergory,idItem) values(:idAlert,:content, :createdon,:idReader,\'expiration\',:iditem)');
    $stmt->bindParam(':idAlert', $idalert, PDO::PARAM_INT);
    $stmt->bindParam(':content', $content, PDO::PARAM_STR);
    $stmt->bindParam(':createdon', $createdon, PDO::PARAM_STR);
    $stmt->bindParam(':idReader', $idReader, PDO::PARAM_STR);
    $stmt->bindParam(':iditem', $iditem, PDO::PARAM_INT);
    $stmt->execute();
  }
  catch (Exception $e)
  {
    echo $e->getMessage();
  }
}

?>
