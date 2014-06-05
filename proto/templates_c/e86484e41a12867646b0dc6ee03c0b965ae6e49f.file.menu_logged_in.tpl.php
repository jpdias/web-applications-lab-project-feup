<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 11:38:21
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1082943400535bde6717f4c9-24864329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e86484e41a12867646b0dc6ee03c0b965ae6e49f' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/common/menu_logged_in.tpl',
      1 => 1398681484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1082943400535bde6717f4c9-24864329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535bde671fc572_03877408',
  'variables' => 
  array (
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bde671fc572_03877408')) {function content_535bde671fc572_03877408($_smarty_tpl) {?><div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
			<a type="submit" href="../pages/user_dash.php">Hello, <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
!</a>
        </div>
       <button type="submit" class="btn btn-primary">
          Sign out
        </button>
      </form>
    </div>
  </div>
</div><?php }} ?>
