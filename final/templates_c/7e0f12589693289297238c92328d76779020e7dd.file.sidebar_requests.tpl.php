<?php /* Smarty version Smarty-3.1.15, created on 2014-06-08 14:31:28
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/manager/sidebar_requests.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1400202553924510c5cd10-10227287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e0f12589693289297238c92328d76779020e7dd' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/manager/sidebar_requests.tpl',
      1 => 1402234217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1400202553924510c5cd10-10227287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53924510d1abe7_75360808',
  'variables' => 
  array (
    'IDMANAGER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53924510d1abe7_75360808')) {function content_53924510d1abe7_75360808($_smarty_tpl) {?><!-- Custom styles for this template -->
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
          <a href="../pages/manager_dash.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
">
            Overview
          </a>
        </li>
        <li>
          <a href="../pages/manager_statistics.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
">
            Statistics
          </a>
        </li>
        <li>
          <a href="../pages/manager_profile.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
">
            My profile
          </a>
        </li>
		<li>
          <a href="../pages/manager_items.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
">
            Inventory
          </a>
        </li>
		<li class="active">
          <a href="../pages/manager_requests.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
">
            Requests
          </a>
        </li>
        <li>
          <a href="../pages/manager_users.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
">
            Users
          </a>
        </li>
		<li>
          <a href="../pages/manager_alerts.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
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

<script src="../javascript/docs.min.js">
</script><?php }} ?>
