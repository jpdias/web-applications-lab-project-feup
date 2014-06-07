<?php /* Smarty version Smarty-3.1.15, created on 2014-06-07 18:36:51
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/main/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163370774053922468235308-68316729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '698df7c7222724a3157b2fb534ebd2931dea9f0d' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/main/admin.tpl',
      1 => 1402162539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163370774053922468235308-68316729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53922468317249_60757878',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53922468317249_60757878')) {function content_53922468317249_60757878($_smarty_tpl) {?><div class="container">
  <div class="col-md-12">
    <br>
	<br>
	<br>
	<h3>Administrator Page</h3>
	<br>
	<br>
	
	<form class="form-signin" role="form" method="post" action="../actions/admin_change_password.php">
	<div class="input-group">
	  <span class="input-group-addon">
	    Password
	  </span>
	  <input type="password" class="form-control" name="password" placeholder="New Password">
    </div>
	<br>
	<input type="submit" value="Change Password">
	</form>
    <br>
	<br>
	
	<div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              Reader #
            </th>
            <th>
              Name
            </th>
			<th>
              E-mail
            </th>
			<th>
              Permissions
            </th>
			<th>
              Enable/Disable account
            </th>
          </tr>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
          <tr>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>

            </td>
			<td>
              <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>

            </td>
            <td>
              <div class="btn-group">
				<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Select one: <span class="caret"></span></button>
				<ul class="dropdown-menu">
					<button class="btn btn-success" data-toggle="modal" data-target="#readerPermissionsModal" onclick="document.getElementById('readeridinput').value = <?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">Reader
					<button class="btn btn-success" data-toggle="modal" data-target="#managerPermissionsModal" onclick="document.getElementById('readeridinput1').value = <?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">Manager
				</ul>
			  </div>
            </td>
			<td>
			<?php if ($_smarty_tpl->tpl_vars['user']->value['currentstatus']=='active') {?>
				<button class="btn btn-danger" data-toggle="modal" data-target="#disableUserAccountModal" onclick="document.getElementById('readeridinput2').value = <?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">Disable Account
		    <?php } else { ?>
				<button class="btn btn-success" data-toggle="modal" data-target="#enableUserAccountModal" onclick="document.getElementById('readeridinput3').value = <?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">Enable Account
		    <?php }?>
			</td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  
    <div class="modal fade" id="readerPermissionsModal" tabindex="-1" role="dialog" aria-labelledby="readerPermissionsModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="readerPermissionsModalLabel">
              Account's permissions
            </h3>
          </div>
          <form action="../actions/user_permissions_admin.php" method="post">
            <input type="hidden" id="readeridinput" name="readeridinput" value="0">
			<input type="hidden" id="permissions" name="permissions" value="reader">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to change this account's permissions to reader?
                  </div>
                  
                  <br>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                No
              </button>
              <button type="submit" class="btn btn-success">
                Yes
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
	
	<div class="modal fade" id="managerPermissionsModal" tabindex="-1" role="dialog" aria-labelledby="managerPermissionsModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="managerPermissionsModalLabel">
              Account's permissions
            </h3>
          </div>
          <form action="../actions/user_permissions_admin.php" method="post">
            <input type="hidden" id="readeridinput1" name="readeridinput1" value="0">
			<input type="hidden" id="permissions" name="permissions" value="manager">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to change this account's permissions to manager?
                  </div>
                  
                  <br>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                No
              </button>
              <button type="submit" class="btn btn-success">
                Yes
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
	
	<div class="modal fade" id="disableUserAccountModal" tabindex="-1" role="dialog" aria-labelledby="disableUserAccountModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="disableUserAccountModalLabel">
              Disable account
            </h3>
          </div>
          <form action="../actions/user_disable_admin.php" method="post">
            <input type="hidden" id="readeridinput2" name="readeridinput2" value="0">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to disable this account?
                  </div>
                  
                  <br>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                No
              </button>
              <button type="submit" class="btn btn-success">
                Yes
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
	
	<div class="modal fade" id="enableUserAccountModal" tabindex="-1" role="dialog" aria-labelledby="enableUserAccountModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="enableUserAccountModalLabel">
              Enable account
            </h3>
          </div>
          <form action="../actions/user_enable_admin.php" method="post">
            <input type="hidden" id="readeridinput3" name="readeridinput3" value="0">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to enable this account?
                  </div>
                  
                  <br>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                No
              </button>
              <button type="submit" class="btn btn-success">
                Yes
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</div><?php }} ?>
