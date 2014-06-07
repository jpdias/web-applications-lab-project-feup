<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 21:28:44
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/main/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5722387665392247c1654a9-03656887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f9cfa2777007437e09fb854e13c7bb409cc6fa' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/main/signin.tpl',
      1 => 1401985699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5722387665392247c1654a9-03656887',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5392247c19e421_80003694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5392247c19e421_80003694')) {function content_5392247c19e421_80003694($_smarty_tpl) {?><!-- Custom styles for this template -->
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
