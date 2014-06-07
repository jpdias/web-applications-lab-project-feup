<?php /* Smarty version Smarty-3.1.15, created on 2014-06-05 00:19:13
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/user/sidebar_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1034117252538c37eb8dd794-34656013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cdd5499a5958cd0e02692a64e5f0723bebf6db6' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/user/sidebar_profile.tpl',
      1 => 1401819882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1034117252538c37eb8dd794-34656013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_538c37eb944457_04506112',
  'variables' => 
  array (
    'IDREADER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c37eb944457_04506112')) {function content_538c37eb944457_04506112($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">
<link href="../css/bootstrap-tagsinput.css" rel="stylesheet">
<style>
.bootstrap-tagsinput {
    width: 150px;
}
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li>
          <a href="../pages/user_dash.php?id=<?php echo $_smarty_tpl->tpl_vars['IDREADER']->value;?>
">
            Overview
          </a>
        </li>
        <li>
          <a href="#">
            Statistics
          </a>
        </li>
        <li class="active">
          <a href="../pages/user_profile.php?id=<?php echo $_smarty_tpl->tpl_vars['IDREADER']->value;?>
">
            My profile
          </a>
        </li>
      </ul>
      <form class="body-form" role="search" method="get" action="../pages/search_results.php">
        <div class="input-group add-on">
          <input name="tags" type="text" class="form-control" data-role="tagsinput" placeholder="Add tags" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search">
              </i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="../javascript/docs.min.js"></script><?php }} ?>
