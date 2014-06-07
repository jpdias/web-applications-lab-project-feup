<?php /* Smarty version Smarty-3.1.15, created on 2014-06-05 00:22:42
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/manager/alerts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1137958977538fa68e5d0795-09516007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f57ef7e4ae6e8f18f46e24991f8c86d341b88b1' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/manager/alerts.tpl',
      1 => 1401924158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1137958977538fa68e5d0795-09516007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_538fa698ba9064_55227546',
  'variables' => 
  array (
    'requests' => 0,
    'userRequest' => 0,
    'alerts' => 0,
    'alert' => 0,
    'userReserve' => 0,
    'readerid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538fa698ba9064_55227546')) {function content_538fa698ba9064_55227546($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    Dashboard
  </h1>
  
  <h2 class="sub-header">
    Pending deliveries
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
            Expire date
          </th>
		  <th>
            Delivery date
          </th>
          <th>
            Status
          </th>
		  <th>
            
          </th>
        </tr>
      </thead>
      <tbody>
	
        <?php  $_smarty_tpl->tpl_vars['userRequest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userRequest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userRequest']->key => $_smarty_tpl->tpl_vars['userRequest']->value) {
$_smarty_tpl->tpl_vars['userRequest']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['userRequest']->value['finaldate']<=time()) {?>
		<?php if ($_smarty_tpl->tpl_vars['userRequest']->value['currentstatus']!="closed") {?>
        <tr>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['idrequisition'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['name'];?>

          </td>
		  <td>
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['comment'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['finaldate'];?>

          </td>
		  <td>
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['deliverydate'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['currentstatus'];?>

          </td>
		   <td>
            <button class="btn btn-warning">Create Alert</button>
          </td>
        </tr>
		<?php }?><?php }?>
        <?php } ?>
      </tbody>
    </table>
  </div>
  
  <br>
  <h2 class="sub-header">
    Alerts
  </h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>
           Created On
          </th>
          <th>
            Item
          </th>
          <th>
            Reserve date
          </th>
          <th>
            Expire date
          </th>
          <th>
            Status
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
          <td>
            <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['username'];?>

          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <!--
  <div class="modal fade" id="requestItemModal" tabindex="-1" role="dialog" aria-labelledby="requestItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="deliverItemModalLabel">
              Request Item
            </h3>
          </div>
          <form action="../actions/reserve_request.php" method="post">
			<input type="hidden" id="reserveidinput" name="reserveid" value="0">
			<input type="hidden" id="itemidinput" name="itemid" value="0">
			<input type="hidden" id="readeridinput" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['readerid']->value;?>
">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to request this item?
                  </div>
                  
                  <br>
                </div>
				
				<div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Comment
                    </span>
                    <input type="text" class="form-control" name="comment" placeholder="Comment">
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
  -->
</div><?php }} ?>
