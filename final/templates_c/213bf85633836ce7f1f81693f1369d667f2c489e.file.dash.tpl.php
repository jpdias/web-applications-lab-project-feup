<?php /* Smarty version Smarty-3.1.15, created on 2014-06-08 16:10:37
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/manager/dash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12945118255392453aab02c1-20892960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '213bf85633836ce7f1f81693f1369d667f2c489e' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/manager/dash.tpl',
      1 => 1402239719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12945118255392453aab02c1-20892960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5392453ac4b715_98487264',
  'variables' => 
  array (
    'userRequests' => 0,
    'userRequest' => 0,
    'userReserves' => 0,
    'userReserve' => 0,
    'readerid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5392453ac4b715_98487264')) {function content_5392453ac4b715_98487264($_smarty_tpl) {?><!-- Model for in-line help -->
<div class="modal fade" id="modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title"><i>DashBoard Overview</i></h4>
      </div>
      <div class="modal-body">
        <div class="te">
          <p>
            After a manager has its sign in complete he will have access to its <i>DashBoard</i>.
          </p>
          <p>
            In this first part of the <i>DashBoard</i> you can observe the overview of all the <i>Requests</i> and <i>Reserves</i> made by yourself so far, displaying several details on the item itself including the current status of the <i>Request</i> or <i>Reserve</i>.
          </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    Dashboard
    <a class="" data-toggle="modal" href="formal.html" data-target="#modal">
      <i class="glyphicon glyphicon-question-sign"></i>
    </a>
  </h1>
  
  <h2 class="sub-header">
    My requests
  </h2>
  <div class="table-responsive" style="max-height:50%;overflow:auto">
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
        <?php  $_smarty_tpl->tpl_vars['userRequest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userRequest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userRequests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userRequest']->key => $_smarty_tpl->tpl_vars['userRequest']->value) {
$_smarty_tpl->tpl_vars['userRequest']->_loop = true;
?>
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
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['initialdate'];?>

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
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  
  <br>
  <h2 class="sub-header">
    My reserves
  </h2>
  <div class="table-responsive" style="max-height:50%;overflow:auto"> 
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
            Reserve date
          </th>
          <th>
            Expire date
          </th>
          <th>
            Status
          </th>
		  <th>
            
          </th>
        </tr>
      </thead>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['userReserve'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userReserve']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userReserves']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userReserve']->key => $_smarty_tpl->tpl_vars['userReserve']->value) {
$_smarty_tpl->tpl_vars['userReserve']->_loop = true;
?>
        <tr>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['idreserve'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['name'];?>

          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['reservedate'];?>

          </td>
          <td>
		  <?php if ($_smarty_tpl->tpl_vars['userReserve']->value['currentstatus']=='open'&&$_smarty_tpl->tpl_vars['userReserve']->value['itemcurrentstatus']=='reserved') {?>
		  <button class="btn btn-success" data-toggle="modal" data-target="#requestItemModal" onclick="document.getElementById('reserveidinput').value = <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['idreserve'];?>
;document.getElementById('itemidinput').value = <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['iditem'];?>
">
			Request Item
          </button>
		  <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['expiredate'];?>

		  <?php }?>
          </td>
          <td>
            <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['currentstatus'];?>

          </td>
		  <td>
		    <?php if ($_smarty_tpl->tpl_vars['userReserve']->value['currentstatus']=='open') {?>
		    <button class="btn btn-danger" data-toggle="modal" data-target="#cancelReserveModal" onclick="document.getElementById('cancelreserveidinput').value = <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['idreserve'];?>
;document.getElementById('cancelitemidinput').value = <?php echo $_smarty_tpl->tpl_vars['userReserve']->value['iditem'];?>
">
		        Cancel Reserve
		    </button>
		    <?php }?>
		  </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  
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
	
	<div class="modal fade" id="cancelReserveModal" tabindex="-1" role="dialog" aria-labelledby="cancelReserveModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="cancelReserveModalLabel">
              Cancel Reserve
            </h3>
          </div>
          <form action="../actions/reserve_cancel.php" method="post">
			<input type="hidden" id="cancelreserveidinput" name="reserveid" value="0">
			<input type="hidden" id="cancelitemidinput" name="itemid" value="0">
			<input type="hidden" id="readeridinput" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['readerid']->value;?>
">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to cancel this reserve?
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