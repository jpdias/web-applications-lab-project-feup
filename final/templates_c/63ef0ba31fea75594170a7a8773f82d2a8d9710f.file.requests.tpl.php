<?php /* Smarty version Smarty-3.1.15, created on 2014-06-08 16:09:59
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/manager/requests.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175280736453924510d55ed7-16368419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ef0ba31fea75594170a7a8773f82d2a8d9710f' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/manager/requests.tpl',
      1 => 1402240197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175280736453924510d55ed7-16368419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53924510e41a99_72366159',
  'variables' => 
  array (
    'requests' => 0,
    'request' => 0,
    'reserves' => 0,
    'reserve' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53924510e41a99_72366159')) {function content_53924510e41a99_72366159($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header">
    Requests
  </h2>
  <div class="table-responsive" style="max-height:400px;overflow:auto">
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
            User
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
        <?php  $_smarty_tpl->tpl_vars['request'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['request']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['request']->key => $_smarty_tpl->tpl_vars['request']->value) {
$_smarty_tpl->tpl_vars['request']->_loop = true;
?>
        <tr>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['request']->value['idrequisition'];?>

          </td>
		  <td>
            <?php echo $_smarty_tpl->tpl_vars['request']->value['name'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['request']->value['username'];?>

          </td>
		  <td>
            <?php echo $_smarty_tpl->tpl_vars['request']->value['comment'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['request']->value['initialdate'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['request']->value['finaldate'];?>

          </td>
		  <td>
		  <?php if ($_smarty_tpl->tpl_vars['request']->value['deliverydate']=='') {?>
		  <button class="btn btn-success" data-toggle="modal" data-target="#deliverItemModal" onclick="document.getElementById('requestidinput').value = <?php echo $_smarty_tpl->tpl_vars['request']->value['idrequisition'];?>
;document.getElementById('itemidinput').value = <?php echo $_smarty_tpl->tpl_vars['request']->value['iditem'];?>
">
			Deliver Item
          </button>
		  <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['request']->value['deliverydate'];?>

		  <?php }?>
          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['request']->value['currentstatus'];?>

          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  
  <br>
  <h2 class="sub-header">
    Reservations
  </h2>
  <div class="table-responsive" style="max-height:400px;overflow:auto">
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
            User
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
        <?php  $_smarty_tpl->tpl_vars['reserve'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reserve']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reserves']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reserve']->key => $_smarty_tpl->tpl_vars['reserve']->value) {
$_smarty_tpl->tpl_vars['reserve']->_loop = true;
?>
        <tr>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['reserve']->value['idreserve'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['reserve']->value['name'];?>

          </td>
		  <td>
            <?php echo $_smarty_tpl->tpl_vars['request']->value['username'];?>

          </td>
		  <td>
            <?php echo $_smarty_tpl->tpl_vars['reserve']->value['reservedate'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['reserve']->value['expiredate'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['reserve']->value['currentstatus'];?>

          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  
  <div class="modal fade" id="deliverItemModal" tabindex="-1" role="dialog" aria-labelledby="deliverItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="deliverItemModalLabel">
              Deliver Item
            </h3>
          </div>
          <form action="../actions/request_deliver.php" method="post">
			<input type="hidden" id="requestidinput" name="requestid" value="0">
			<input type="hidden" id="itemidinput" name="itemid" value="0">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to deliver this item?
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
	
</div><?php }} ?>
