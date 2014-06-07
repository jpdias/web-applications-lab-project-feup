<?php /* Smarty version Smarty-3.1.15, created on 2014-06-07 15:54:14
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/main/signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1912554566539327964f0276-47574839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cc1e6d350d93ef279df503c2c13a46440127bc3' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/main/signup.tpl',
      1 => 1401822430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912554566539327964f0276-47574839',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53932796575b94_94999434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53932796575b94_94999434')) {function content_53932796575b94_94999434($_smarty_tpl) {?><!-- Custom styles for this template -->
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
  <input name="address" type="text" class="form-control" placeholder="Address" required>
  <br>
  <input name="birthdate" type="date" class="form-control" placeholder="Birthdate (YYYY-MM-DD)"  pattern="\d{4}-\d{1,2}-\d{1,2}"  required>
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
