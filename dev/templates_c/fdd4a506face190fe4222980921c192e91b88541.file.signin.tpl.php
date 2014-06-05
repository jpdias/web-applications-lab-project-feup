<?php /* Smarty version Smarty-3.1.15, created on 2014-06-05 17:28:21
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/main/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145895080453682c935d2820-90436485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdd4a506face190fe4222980921c192e91b88541' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/main/signin.tpl',
      1 => 1401985699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145895080453682c935d2820-90436485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53682c935d6059_41825142',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53682c935d6059_41825142')) {function content_53682c935d6059_41825142($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/signin.css" rel="stylesheet">

<div class="container">
  <form class="form-signin" role="form" method="post" action="../actions/login.php">
    <h2 class="form-signin-heading">
      Please sign in
    </h2>
    <input name="email" type="text" class="form-control" placeholder="Email" required autofocus>
    <input name="password" type="password" class="form-control" placeholder="Password" required>
    <label class="checkbox">
      <input type="checkbox" value="remember-me">
      Remember me
    </label>
    <button class="btn btn-lg btn-success btn-block" type="submit">
      Sign in
    </button>
  </form>
</div><?php }} ?>
