<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 11:38:21
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/main/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118612124253583a14e16968-35643864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '343e2ba1e15d1d3402170b265a83ac55f7a08a39' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/main/signin.tpl',
      1 => 1398681484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118612124253583a14e16968-35643864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53583a14ea61f3_71245274',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53583a14ea61f3_71245274')) {function content_53583a14ea61f3_71245274($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/signin.css" rel="stylesheet">

<div class="container">
  <form class="form-signin" role="form" method="post" action="../actions/login.php">
    <h2 class="form-signin-heading">
      Please sign in
    </h2>
    <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
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
