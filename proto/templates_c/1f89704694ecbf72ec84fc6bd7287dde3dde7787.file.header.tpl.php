<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 11:38:21
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131249974535833d3864170-52042681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f89704694ecbf72ec84fc6bd7287dde3dde7787' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/common/header.tpl',
      1 => 1398681484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131249974535833d3864170-52042681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535833d38ead96_42966574',
  'variables' => 
  array (
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535833d38ead96_42966574')) {function content_535833d38ead96_42966574($_smarty_tpl) {?><!DOCTYPE html>
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
		<div id="error"><center><h5><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
 (Clique em qualquer local para fechar)</center></h5></div>
    <?php } ?>
	<!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../javascript/jquery.js">
    </script>
    <script src="../javascript/bootstrap.js">
    </script>
    <script src="../javascript/bootstrap-tagsinput.js">
    </script>
	<script src="../javascript/useful.js">
    </script>
  </body>
</html><?php }} ?>
