<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');

	include_once($BASE_DIR . 'database/requests.php');

	include_once($BASE_DIR . 'database/alerts.php');

	createAlert(count(getAllAlerts())+1,$_POST["comment"], date("Y-m-d"), 2, 1);

	header('Location: ../pages/manager_alerts.php?id=' . $_SESSION['idmanager']);

}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>
