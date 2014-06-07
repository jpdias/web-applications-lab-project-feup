<?php /* Smarty version Smarty-3.1.15, created on 2014-06-07 15:50:09
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/common/admin_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8918540653922a95315bd3-22018870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c6063f8d7fb644e0ee603021449622985e25e90' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/common/admin_header.tpl',
      1 => 1402152602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8918540653922a95315bd3-22018870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53922a95398870_86924899',
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'error_message' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53922a95398870_86924899')) {function content_53922a95398870_86924899($_smarty_tpl) {?><!DOCTYPE html>
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
		<?php  $_smarty_tpl->tpl_vars['error_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_message']->key => $_smarty_tpl->tpl_vars['error_message']->value) {
$_smarty_tpl->tpl_vars['error_message']->_loop = true;
?>
			<center><div id="error_message_div" style="color:#ffffff;background-color:#d9534f;height:20px;width:100%;margin-top:-9px"><h4><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<a style="float:right;" href="#" onclick="$(this).parent().parent().remove();"><i class="glyphicon glyphicon-remove"></i></a></h4></div></center>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['success_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success_message']->key => $_smarty_tpl->tpl_vars['success_message']->value) {
$_smarty_tpl->tpl_vars['success_message']->_loop = true;
?>
			<center><div id="success_message_div" style="color:#ffffff;background-color:#5cb85c;height:20px;width:100%;margin-top:-9px"><h4><?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>
<a style="float:right;" href="#" onclick="$(this).parent().parent().remove();"><i class="glyphicon glyphicon-remove"></i></a></h4></div></center>
		<?php } ?>
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
</script><?php }} ?>
