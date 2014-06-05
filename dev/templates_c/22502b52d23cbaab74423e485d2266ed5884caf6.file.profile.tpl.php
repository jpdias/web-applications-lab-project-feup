<?php /* Smarty version Smarty-3.1.15, created on 2014-06-03 19:24:49
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/manager/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156746021453707cb1417417-77824268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22502b52d23cbaab74423e485d2266ed5884caf6' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/manager/profile.tpl',
      1 => 1401818785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156746021453707cb1417417-77824268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53707cb150c094_59370175',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53707cb150c094_59370175')) {function content_53707cb150c094_59370175($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
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
                            <span class="label label-success">
                              <?php echo $_smarty_tpl->tpl_vars['user']->value['currentstatus'];?>

                            </span>
                          </h5>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editUserModal">
                  Edit profile details
                </button>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['currentstatus']=='active') {?>
                <br>
				<br>
				<button class="btn btn-danger" data-toggle="modal" data-target="#disableUserAccountModal">
                  Disable Account
                </button>
				<?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="editUserModalLabel">
              Edit profile details
            </h3>
          </div>
          <form action="../actions/user_edit.php" method="post">
            <input type="hidden" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      First Name
                    </span>
                    <input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
">
                  </div>
                  
                  <br>
                </div>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Last Name
                    </span>
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
">
                  </div>
                  <br>
                  
                </div>
                
                <br>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Address
                    </span>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
">
                  </div>
                  <br>
                </div>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Email
                    </span>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" readonly>
                  </div>
                  
                  <br>
                </div>
                
                <br>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Previous Password
                    </span>
                    <input type="password" class="form-control" name="previouspassword" placeholder="Password">
                  </div>
                  
                  <br>
                </div>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      New Password
                    </span>
                    <input type="password" class="form-control" name="newpassword" placeholder="Password">
                  </div>
                  
                  <br>
                </div>
                <br>
                <br>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-success">
                Save changes
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
          <form action="../actions/user_disable_logout.php" method="post">
            <input type="hidden" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['idreader'];?>
">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to disable your account?
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
