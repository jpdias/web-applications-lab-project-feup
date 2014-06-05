<?php /* Smarty version Smarty-3.1.15, created on 2014-04-30 08:54:27
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/main/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1234838526535833d6ef3a60-25099504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '496178315553edab9a5a0950ba35971acfeba97f' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/main/signup.tpl',
      1 => 1398681484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1234838526535833d6ef3a60-25099504',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535833d7030ae7_70192839',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535833d7030ae7_70192839')) {function content_535833d7030ae7_70192839($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/signin.css" rel="stylesheet">

<div class="container">
  <form class="form-signin" role="form" method="post" action="../actions/register.php">
    <h2 class="form-signin-heading">
      Sign up
    </h2>
    <br>
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <input name="firstname" type="text" class="form-control" placeholder="First Name" required autofocus>
        </div>
        <!-- /input-group -->
      </div>
      <!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input name="lastname" type="text" class="form-control" placeholder="Last Name" required>
        </div>
        <!-- /input-group -->
      </div>
      <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
  </br>
  <input name="city" type="text" class="form-control" placeholder="City" required>
  <br>
  <input name="birthdate" type="date" class="form-control" placeholder="Birthdate" required>
  <br>
  <input name="email" type="email" class="form-control" placeholder="Email address" required>
  <br>
  <input name="password" type="password" class="form-control" placeholder="Password" required>
  <input name="confirmpassword" type="password" class="form-control" placeholder="Reenter password" required>
  <label class="checkbox">
    <input name="termsandconditions" type="checkbox" value="agree" checked>
    I agree with the terms and conditions.
  </label>
  <button class="btn btn-lg btn-primary btn-block" type="submit">
    Sign up
  </button>
</form>
</div><?php }} ?>
