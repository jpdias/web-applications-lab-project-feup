<?php /* Smarty version Smarty-3.1.15, created on 2014-06-08 00:06:41
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/user/alerts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31553186853939b016466e8-02708319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13f263c45b917a21d4002beb792828416e33e920' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/user/alerts.tpl',
      1 => 1402101069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31553186853939b016466e8-02708319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53939b01681dc2_96956398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53939b01681dc2_96956398')) {function content_53939b01681dc2_96956398($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header">
    Alerts
  </h2>
  <div class="table-responsive" style="height:800px;overflow:auto">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>
           Created On
          </th>
          <th>
            Item Name
          </th>
          <th>
            Content
          </th>

        </tr>
      </thead>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>
        <tr>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value['createdon'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value['name'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['alert']->value['content'];?>

          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<?php }} ?>
