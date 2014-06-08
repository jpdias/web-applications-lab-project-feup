<?php
try
{
	include_once('../config/init.php');

	include_once($BASE_DIR . 'database/items.php');
	include_once($BASE_DIR . 'database/requests.php');
	include_once($BASE_DIR . 'database/users.php');
	include_once($BASE_DIR . 'database/alerts.php');
	
	
if(isset($_POST["varUs"]) && isset($_POST["varIt"])) {
	createAlert(count(getAllAlerts())+1,$_POST["comment"], date("Y-m-d"), $_POST["varUs"], $_POST["varIt"]);
	
	$user = getUserById($_POST["varUs"]);
	$item = getItemById($_POST["varIt"]);
	
	$from = "no-reply@gestorax.com";
			
	$subject = "Item Alert";
				
	$message = "Hello " .$user[0]["username"] . ",\n\n This is an alert about the item:\n Name: " . $item[0]["name"] ." - ID: " . $item[0]["iditem"] .  "\n " . $_POST["comment"] . "\n\nSincerely,\nGestorax Team";
				
	$message = wordwrap($message, 1000);
				
	mail($user[0]["email"], $subject, $message, "From: $from\n");
	
}	
	header('Location: ../pages/manager_alerts.php?id=' . $_SESSION['idmanager']);

}
catch (Exception $e)
{
	echo $e->getMessage();
}
?>
