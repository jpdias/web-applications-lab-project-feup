<?php /* Smarty version Smarty-3.1.15, created on 2014-06-05 16:40:37
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/manager/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:749724334537092eb30d750-36948334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ff3f5c44e98feca01eef2742704b407e6f292b' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/manager/user.tpl',
      1 => 1401818786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '749724334537092eb30d750-36948334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_537092eb524350_03804498',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'usersRequests' => 0,
    'usersRequest' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537092eb524350_03804498')) {function content_537092eb524350_03804498($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="well well-sm">
          <div class="media">
            <a class="thumbnail pull-left" style="margin-bottom:0px;" href="#">
              <img class="media-object"   src="http://www.gravatar.com/avatar/a13ac7aed64918b6354f48da59490e3a?s=80">
            </a>
            <div class="media-body">
              <h4 class="media-heading">
                <?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>

              </h4>
              
			  <h5>
				<label>
				  E-mail: 
				  <label>
					<span class="label label-info">
					  <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>

					</span>
				  </h5>
                  
                  <h5>
                    <label>
                      Address: 
                      <label>
                        <?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>

                      </span>
                    </h5>
                    
                    <h5>
                      <label>
                        Birthdate: 
                        <label>
						  <?php echo $_smarty_tpl->tpl_vars['user']->value['birthdate'];?>

                        </span>
                      </h5>
                      
                      <h5>
                        <label>
                          Status: 
                          <label>
							<?php if ($_smarty_tpl->tpl_vars['user']->value['currentstatus']=='active') {?>
								<span class="label label-success">
							<?php } else { ?>
								<span class="label label-danger">
							<?php }?>
                              <?php echo $_smarty_tpl->tpl_vars['user']->value['currentstatus'];?>

                            </span>
                          </h5>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <h3>
                  Account status: 
				  <?php if ($_smarty_tpl->tpl_vars['user']->value['currentstatus']=='active') {?>
                  <button class="btn btn-danger" data-toggle="modal" data-target="#disableUserAccountModal">
                    Disable Account
                  </button>
				  <?php } else { ?>
				  <button class="btn btn-success" data-toggle="modal" data-target="#enableUserAccountModal">
                    Enable Account
                  </button>
				  <?php }?>
                </h3>
              </div>
              <div class="col-md-5">
                <h3>
                  Permissions: 
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Select one: <span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a data-toggle="modal" data-target="#readerPermissionsModal">Reader</a></li>
							<li><a data-toggle="modal" data-target="#managerPermissionsModal">Manager</a></li>
						</ul>
					</div>
                </h3>
              </div>
              <br>
              <br>
              <br>
              <br>
              <div class="col-md-10">
                <h2 class="sub-header">
                  Requests
                </h2>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Item
                        </th>
                        <th>
                          Comment
                        </th>
                        <th>
                          Request date
                        </th>
                        <th>
                          Expire date
                        </th>
                        <th>
                          Delivery date
                        </th>
                        <th>
                          Status
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  $_smarty_tpl->tpl_vars['usersRequest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usersRequest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usersRequests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usersRequest']->key => $_smarty_tpl->tpl_vars['usersRequest']->value) {
$_smarty_tpl->tpl_vars['usersRequest']->_loop = true;
?>
                      <tr>
                        <td>
                          <?php echo $_smarty_tpl->tpl_vars['usersRequest']->value['idrequisition'];?>

                        </td>
                        <td>
                          <?php echo $_smarty_tpl->tpl_vars['usersRequest']->value['name'];?>

                        </td>
                        <td>
                          <?php echo $_smarty_tpl->tpl_vars['usersRequest']->value['comment'];?>

                        </td>
                        <td>
                          <?php echo $_smarty_tpl->tpl_vars['usersRequest']->value['initialdate'];?>

                        </td>
                        <td>
                          <?php echo $_smarty_tpl->tpl_vars['usersRequest']->value['finaldate'];?>

                        </td>
                        <td>
                          <?php echo $_smarty_tpl->tpl_vars['usersRequest']->value['deliverydate'];?>

                        </td>
                        <td>
                          <?php echo $_smarty_tpl->tpl_vars['usersRequest']->value['currentstatus'];?>

                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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
          <form action="../actions/user_disable.php" method="post">
            <input type="hidden" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">
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
          <form action="../actions/user_enable.php" method="post">
            <input type="hidden" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">
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
          <form action="../actions/user_permissions.php" method="post">
            <input type="hidden" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">
			<input type="hidden" name="permissions" value="reader">
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
          <form action="../actions/user_permissions.php" method="post">
            <input type="hidden" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">
			<input type="hidden" name="permissions" value="manager">
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
	
  </div>
</div>
<?php } ?><?php }} ?>
