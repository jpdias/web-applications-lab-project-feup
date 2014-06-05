<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 11:38:21
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1621805635535833d38f46a6-09943392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b71f2211e48994bb163c4e7568099c9184a842' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/common/menu_logged_out.tpl',
      1 => 1398681484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621805635535833d38f46a6-09943392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535833d38f8d32_07325026',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535833d38f8d32_07325026')) {function content_535833d38f8d32_07325026($_smarty_tpl) {?><div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
