<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 21:51:27
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1045467233539229cf85f059-33353868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1029a89fd34934b34785d287e475f891f46a1ab4' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/common/menu_logged_in.tpl',
      1 => 1401825129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045467233539229cf85f059-33353868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IDMANAGER' => 0,
    'IDREADER' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539229cf905343_91506725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539229cf905343_91506725')) {function content_539229cf905343_91506725($_smarty_tpl) {?><div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
    <div class="navbar-collapse collapse">
      <form class="navbar-form navbar-right" role="form" method="post" action="../actions/logout.php">
        <div class="form-group">
		<?php if ($_smarty_tpl->tpl_vars['IDMANAGER']->value=='') {?>
		  <a type="submit" href="../pages/user_dash.php?id=<?php echo $_smarty_tpl->tpl_vars['IDREADER']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
's Control Panel</a>
		<?php } else { ?>
		  <a type="submit" href="../pages/manager_dash.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
's Control Panel</a>
		<?php }?>
        </div>
        <button type="submit" class="btn btn-danger">
          Sign out
        </button>
      </form>
    </div>
  </div>
</div><?php }} ?>
