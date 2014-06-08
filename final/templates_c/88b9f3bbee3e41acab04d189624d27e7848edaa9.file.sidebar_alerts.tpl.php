<?php /* Smarty version Smarty-3.1.15, created on 2014-06-08 14:39:31
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/user/sidebar_alerts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1922352077539466a3caccd3-03268916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b9f3bbee3e41acab04d189624d27e7848edaa9' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/user/sidebar_alerts.tpl',
      1 => 1402234757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1922352077539466a3caccd3-03268916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539466a3d3b028_71989932',
  'variables' => 
  array (
    'IDREADER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539466a3d3b028_71989932')) {function content_539466a3d3b028_71989932($_smarty_tpl) {?><!-- Custom styles for this template -->
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
          <a  href="../pages/user_statistics.php?id=<?php echo $_smarty_tpl->tpl_vars['IDREADER']->value;?>
">
            Statistics
          </a>
        </li>
        <li>
          <a href="../pages/user_profile.php?id=<?php echo $_smarty_tpl->tpl_vars['IDREADER']->value;?>
">
            My profile
          </a>
        </li>
		<li class="active">
          <a href="../pages/user_alerts.php?id=<?php echo $_smarty_tpl->tpl_vars['IDREADER']->value;?>
">
            Alerts
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
