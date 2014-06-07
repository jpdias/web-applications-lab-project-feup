<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 20:47:45
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155844874053921ae1b20518-29079076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3269644103667bc819638722ce6b8d90d3aed91a' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/common/menu_logged_out.tpl',
      1 => 1401825129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155844874053921ae1b20518-29079076',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53921ae1b24780_98223287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53921ae1b24780_98223287')) {function content_53921ae1b24780_98223287($_smarty_tpl) {?><div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
      <form class="navbar-form navbar-right" role="form" method="post" action="../actions/login.php">
        <div class="form-group">
          <input name="email" type="text" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
          <input name="password" type="password" placeholder="Password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">
          Sign in
        </button>
        <a type="submit" class="btn btn-primary" href="../pages/signup.php">
          Sign up
        </a>
      </form>
    </div>
  </div>
</div><?php }} ?>
