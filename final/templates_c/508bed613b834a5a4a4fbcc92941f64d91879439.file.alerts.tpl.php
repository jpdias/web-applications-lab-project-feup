<?php /* Smarty version Smarty-3.1.15, created on 2014-06-07 23:25:09
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/manager/alerts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57174188753924011cc5f06-71070826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '508bed613b834a5a4a4fbcc92941f64d91879439' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/manager/alerts.tpl',
      1 => 1402179905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57174188753924011cc5f06-71070826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53924011d89676_44577332',
  'variables' => 
  array (
    'requests' => 0,
    'userRequest' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53924011d89676_44577332')) {function content_53924011d89676_44577332($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">
    Dashboard
  </h1>

  <h2 class="sub-header">
    Pending deliveries
  </h2>
  <div class="table-responsive" style="max-height:400px;overflow:auto">
    <table class="table table-striped" id="all" >
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
            Reader Username
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
		 
<?php if ($_smarty_tpl->tpl_vars['userRequest']->value['currentstatus']!='closed') {?>

        <tr>
		<td id="idIt" style="display:none" ><?php echo $_smarty_tpl->tpl_vars['userRequest']->value['iditem'];?>
</td>
		<td id="idUs" style="display:none"><?php echo $_smarty_tpl->tpl_vars['userRequest']->value['idreader'];?>
</td>
          <td id="idrequisition">
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['idrequisition'];?>

          </td>
          <td id="name">
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['name'];?>

          </td>
          <td id="comment">
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['comment'];?>

          </td>
          <td id="finaldate">
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['finaldate'];?>

          </td>
          <td id="deliverydate">
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['deliverydate'];?>

          </td>
          <td id="username">
              <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['username'];?>

              </td>
          <td id="currentstatus">
            <?php echo $_smarty_tpl->tpl_vars['userRequest']->value['currentstatus'];?>

          </td>
          <td>
            <button id="createbtn" class="btn btn-warning" data-toggle="modal" data-target="#alert" ">Create Alert </button>
          </td>
        </tr>
	<?php }?>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <br>
  <h2 class="sub-header">
    Alerts
  </h2>
  <div class="table-responsive" style="max-height:400px;overflow:auto">
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
            Message
          </th>
          <th>
            Username
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
            <?php echo $_smarty_tpl->tpl_vars['alert']->value['username'];?>

          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="requestItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="deliverItemModalLabel">
                Creating a new alert
            </h3>
          </div>
          <form action="../actions/create_alert.php" method="post">
			<input type="hidden" id="idreq" name="idreq" value="0">
			<input type="hidden" id="varname" name="varname" value="0">
			<input type="hidden" id="varcom" name="varcom" value="0">
			<input type="hidden" id="vardelivery" name="vardelivery" value="0">
			<input type="hidden" id="varfin" name="varfin" value="0">
			<input type="hidden" id="varuser" name="varuser" value="0">
			<input type="hidden" id="varcurr" name="varcurr" value="0">
<input type="hidden" id="varIt" name="varIt" value="0">
<input type="hidden" id="varUs" name="varUs" value="0">
            <div class="row">
              <div class="col-md-12">
                <br>
                <div class="col-md-12">
                  <div class="input-group">
                  </div>
                  <br>
                </div>
				<div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Message
                    </span>
                    <input type="text" class="form-control" name="comment" placeholder="Comment">
                  </div>
                  <br>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Cancel
              </button>
              <button type="submit" class="btn btn-success">
                Send
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

</div>
<script>
/*function fillVars(){
$("#varIt").val( $("#createbtn").parent('td').parent('tr').find('#idIt').text());
$("#varUs").val($("#createbtn").parent('td').parent('tr').find('#idUs').text());
console.log( $("#createbtn").parent('td').parent('tr').find('#idIt').text());
console.log( $("#createbtn").parent('td').parent('tr').find('#idUs').text());
};*/
$('#all').on( 'click', '#createbtn', function( event ) {
        var $tr = $(this).closest('tr');
        $("#varIt").val($tr.find('#idIt').text());
        $("#varUs").val($tr.find( '#idUs').text());
console.log( $tr.find('#idIt').text());
        // Submit your form here
});

</script><?php }} ?>
