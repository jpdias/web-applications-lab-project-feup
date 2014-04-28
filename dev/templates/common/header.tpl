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
    {if $USERNAME != ""}
		{include file='common/menu_logged_in.tpl'}
	{else}
		{include file='common/menu_logged_out.tpl'}
	{/if}
	{foreach $ERROR_MESSAGES as $error_message}
		<center><div id="error_message" style="color:#ffffff;background-color:#d9534f;height:8%;width:100%;margin-top:-8px"><h4>{$error_message}<a style="float:right;" href="#" onclick="$(this).parent().remove();">X</a></h4></div></center>
    {/foreach}
	{foreach $SUCCESS_MESSAGES as $success_message}
		<center><div id="success_message" style="color:#ffffff;background-color:#5cb85c;height:8%;width:100%;margin-top:-8px"><h4>{$success_message}<a style="float:right;" href="#" onclick="$(this).parent().remove();">X</a></h4></div></center>
    {/foreach}
	<!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../javascript/jquery.js">
    </script>
    <script src="../javascript/bootstrap.js">
    </script>
    <script src="../javascript/bootstrap-tagsinput.js">
    </script>
  </body>
</html>