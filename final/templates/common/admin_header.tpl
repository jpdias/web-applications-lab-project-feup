<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../resources/logo.ico">
    <title>
      Gestorax - Inventory Management
    </title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">
			  Toggle navigation
			</span>
			<span class="icon-bar">
			</span>
			<span class="icon-bar">
			</span>
			<span class="icon-bar">
			</span>
		  </button>
		  <a class="navbar-brand" href="main.php">
			<img href="" src="../resources/logo.png" style="width:6%;hight:6%">
			Gestorax - Inventory Management
		  </a>
		</div>
	  </div>
		{foreach $ERROR_MESSAGES as $error_message}
			<center><div id="error_message_div" style="color:#ffffff;background-color:#d9534f;height:20px;width:100%;margin-top:-9px"><h4>{$error_message}<a style="float:right;" href="#" onclick="$(this).parent().parent().remove();"><i class="glyphicon glyphicon-remove"></i></a></h4></div></center>
		{/foreach}
		{foreach $SUCCESS_MESSAGES as $success_message}
			<center><div id="success_message_div" style="color:#ffffff;background-color:#5cb85c;height:20px;width:100%;margin-top:-9px"><h4>{$success_message}<a style="float:right;" href="#" onclick="$(this).parent().parent().remove();"><i class="glyphicon glyphicon-remove"></i></a></h4></div></center>
		{/foreach}
	</div>
  </body>
  
  <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../javascript/jquery.js">
</script>
<script src="../javascript/bootstrap.js">
</script>
<script src="../javascript/bootstrap-tagsinput.js">
</script>