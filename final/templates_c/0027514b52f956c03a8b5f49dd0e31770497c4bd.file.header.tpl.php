<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 20:47:45
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188241602653921ae1a2f430-33837805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0027514b52f956c03a8b5f49dd0e31770497c4bd' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/common/header.tpl',
      1 => 1401897099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188241602653921ae1a2f430-33837805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error_message' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53921ae1b18b39_24681862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53921ae1b18b39_24681862')) {function content_53921ae1b18b39_24681862($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value!='') {?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
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
