<?php
    include '../config/init.php';
	var firstname = $_GET["first"];
	var lastname = $_GET["last"];
	var email = $_GET["email"];
	var city = $_GET["city"];
	var password = $_GET["password"];
	echo(firstname . ";" . lastname  . ";" . email  . ";" . city  . ";" . password);
	

?>