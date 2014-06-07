<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 23:47:49
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/manager/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193336141253924515413163-10324164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '884f2818fe726ccce4ab1677f6a6f2b6329fa508' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/manager/item.tpl',
      1 => 1402007741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193336141253924515413163-10324164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'repairCompanies' => 0,
    'repairCompany' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539245155c7f23_98372048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539245155c7f23_98372048')) {function content_539245155c7f23_98372048($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="container">
	<div class="row">
      <div class="col-md-9">
        <div class="well well-sm">
          <div class="media">
            <a class="pull-left" style="margin-bottom:0px;" href="#">
              <img class="thumbnail media-object" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="200px" height="150px">
			    <h4>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['currentstatus']!='withdrawn') {?>
                  <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#editItemImageModal">
                    Edit Item image
                </h4>
				<?php }?>
              </a>
              <div class="media-body">
                <h3 class="media-heading">
                  <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                </h4>
                <br>
                <h4>
                  <label>
                    Description: 
                    <label>
                    </h4>
                    <h5>
                      <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                    </h5>
                    <br>
                    <h4>
                      <label>
                        Status: 
                        <label>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['currentstatus']=='available') {?>
                          <span class="label label-success">  
						<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['currentstatus']=='reserved') {?>
							<span class="label label-primary">
						<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['currentstatus']=='repair') {?>
							<span class="label label-warning">
						<?php } else { ?>
							<span class="label label-danger">
						<?php }?>
						<?php }?>
						<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['currentstatus'];?>

                          </span>
                        </h4>
                      </div>
                    </div>
                  </div>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['currentstatus']=='repair') {?>
			<div class="col-md-10">
              <h2>
                <button class="btn btn-success btn-md" data-toggle="modal" data-target="#fromRepairItemModal">
                  Back from repair
                </button>
              </h2>
            </div>
			<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['currentstatus']!='withdrawn') {?>
			
				<div class="col-md-8">
				<br><br>
				  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editItemDetailModal">
					Edit item details
				  </button>
		
				<br>
				  <h2>
					<button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#toRepairItemModal">
					  Send to repair
					</button>
				  </h2>
			
				
				  <h2>
					<button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#disableItemModal">
					  Disable item
					</button>
				  </h2>
				</div>
				<div class="col-md-4">
				<h3>Item QR Code:</h3>
				<script>
					var url = 'http://gnomo.fe.up.pt/~lbaw1342/dev/pages/item.php?itemid=<?php echo $_smarty_tpl->tpl_vars['item']->value['iditem'];?>
';
					var request = "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl="+encodeURIComponent(url);
					document.write("<img src="+request+" />");
				</script>
				</div>
			
			<?php }?>
			<?php }?>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="editItemDetailModal" tabindex="-1" role="dialog" aria-labelledby="editItemDetailModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="editItemDetailModalLabel">
              Edit item
            </h3>
          </div>
          <form action="../actions/item_edit.php" method="post">
            <input type="hidden" name="itemid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['iditem'];?>
">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Item Name
                    </span>
                    <input type="text" class="form-control" name="itemname" placeholder="Item Name" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
                  </div>
                  
                  <br>
                </div>
                
                <div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Item Description
                    </span>
                    <input type="text" class="form-control" name="itemdescription" placeholder="Last Name" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
">
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
    
    <div class="modal fade" id="editItemImageModal" tabindex="-1" role="dialog" aria-labelledby="editItemImageModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="editItemImageModalLabel">
              Edit item image
            </h3>
          </div>
          <form action="../actions/item_edit_image.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="itemid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['iditem'];?>
">
            <div class="row">
              <div class="col-md-12">
                <br>
                <div class="input-group">
                  <input type="file" name="file" id="file">
                </div>
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
	
	<div class="modal fade" id="toRepairItemModal" tabindex="-1" role="dialog" aria-labelledby="toRepairItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="toRepairItemModalLabel">
              Send item to repair
            </h4>
          </div>
          <form action="../actions/item_to_repair.php" method="post">
            <input type="hidden" name="itemid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['iditem'];?>
">
			<input type="hidden" id="repaircompanyidinput" name="repaircompanyid" value="1">
            <div class="row">
              <div class="col-md-12">
                <br>
				
				<div class="col-md-12">
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Select the repair company: <span class="caret"></span></button>
						<ul class="dropdown-menu">
						<?php  $_smarty_tpl->tpl_vars['repairCompany'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['repairCompany']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['repairCompanies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['repairCompany']->key => $_smarty_tpl->tpl_vars['repairCompany']->value) {
$_smarty_tpl->tpl_vars['repairCompany']->_loop = true;
?>
							<li><a onclick="document.getElementById('repaircompanyidinput').value = <?php echo $_smarty_tpl->tpl_vars['repairCompany']->value['idrepaircompany'];?>
"><?php echo $_smarty_tpl->tpl_vars['repairCompany']->value['companyname'];?>
</a></li>
						<?php } ?>
						</ul>
					</div>
					<br>
					<br>
				</div>
				
				<div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Reason
                    </span>
                    <input type="text" class="form-control" name="reason" placeholder="Reason">
                  </div>
                  <br>
                </div>
				
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-success">
                Send to repair
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
	
	<div class="modal fade" id="fromRepairItemModal" tabindex="-1" role="dialog" aria-labelledby="fromRepairItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="fromRepairItemModalLabel">
              Repaired item
            </h4>
          </div>
          <form action="../actions/item_from_repair.php" method="post">
            <input type="hidden" name="itemid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['iditem'];?>
">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Is this item repaired?
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
	
	<div class="modal fade" id="disableItemModal" tabindex="-1" role="dialog" aria-labelledby="disableItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="disableItemModalLabel">
              Disable item
            </h4>
          </div>
          <form action="../actions/item_disable.php" method="post">
            <input type="hidden" name="itemid" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['iditem'];?>
">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to disable this item?
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
