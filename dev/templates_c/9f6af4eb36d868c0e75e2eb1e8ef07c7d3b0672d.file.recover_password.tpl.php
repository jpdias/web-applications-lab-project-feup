<?php /* Smarty version Smarty-3.1.15, created on 2014-06-04 16:38:35
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/main/recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1670334479538c4ad46faf02-77187888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f6af4eb36d868c0e75e2eb1e8ef07c7d3b0672d' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/main/recover_password.tpl',
      1 => 1401818784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1670334479538c4ad46faf02-77187888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_538c4ad4780e95_60964211',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c4ad4780e95_60964211')) {function content_538c4ad4780e95_60964211($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/signin.css" rel="stylesheet">

<div class="container">
  <form class="form-signin" role="form" method="post" action="../actions/recover_password.php">
    <h2 class="form-signin-heading">
      Please enter your e-mail
    </h2>
    <input name="email" type="email" class="form-control" placeholder="Email" required autofocus>
    <button class="btn btn-lg btn-success btn-block" type="submit">
      Recover password
    </button>
  </form>
</div><?php }} ?>
