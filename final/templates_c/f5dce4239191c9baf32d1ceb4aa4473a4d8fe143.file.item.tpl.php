<?php /* Smarty version Smarty-3.1.15, created on 2014-06-07 12:37:02
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/main/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17011915835392f95eb873c1-86989227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5dce4239191c9baf32d1ceb4aa4473a4d8fe143' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/main/item.tpl',
      1 => 1401989750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17011915835392f95eb873c1-86989227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'readerid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5392f95ebfb860_06953446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5392f95ebfb860_06953446')) {function content_5392f95ebfb860_06953446($_smarty_tpl) {?><div class="container" style="margin-top:60px;">
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <div class="row">
    
    <div class="col-md-12">
      <br>
      <h1>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

      </h1>
      <br>
      <hr>
      <br>
    </div>
    <div class="col-md-4">
      <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" style="width:80%"/>
    </div>
    <div class="col-md-6">
      <h2>
        Description:
      </h2>
      <h3>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

      </h3>
      <br>
      <h3>
        Current Status: <?php echo $_smarty_tpl->tpl_vars['item']->value['currentstatus'];?>

      </h3>
    </div>
    <div class="col-md-2" style="float:right;">
      <h3>
        I want it:
      </h3>
      
      <?php if ($_smarty_tpl->tpl_vars['item']->value['currentstatus']=='available') {?>
      <button class="btn btn-success" data-toggle="modal" data-target="#requestItemModal" onclick="document.getElementById('requestitemidinput').value = <?php echo $_smarty_tpl->tpl_vars['item']->value['iditem'];?>
">
        <i class="glyphicon glyphicon-tag">
        </i>
        Request
      </button>
      <?php } else { ?>
      <button class="btn btn-primary" data-toggle="modal" data-target="#reserveItemModal" onclick="document.getElementById('reserveitemidinput').value = <?php echo $_smarty_tpl->tpl_vars['item']->value['iditem'];?>
">
        <i class="glyphicon glyphicon-tag">
        </i>
        Reserve 
      </button>
      <?php }?>
	  
	  <br>
	  <br>
	  <h3>Item QR Code:</h3>
	  <script>
		 var url = 'http://gnomo.fe.up.pt/~lbaw1342/dev/pages/item.php?itemid=<?php echo $_smarty_tpl->tpl_vars['item']->value['iditem'];?>
';
		 var request = "https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl="+encodeURIComponent(url);
		 document.write("<img src="+request+" />");
	  </script>
	  
	</div>
	
	<div class="modal fade" id="requestItemModal" tabindex="-1" role="dialog" aria-labelledby="requestItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="requestItemModalLabel">
              Request Item
            </h3>
          </div>
          <form action="../actions/request_add.php" method="post">
            <input type="hidden" id="readeridinput" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['readerid']->value;?>
">
			<input type="hidden" id="requestitemidinput" name="itemid" value="0">
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
	
	<div class="modal fade" id="reserveItemModal" tabindex="-1" role="dialog" aria-labelledby="reserveItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="reserveItemModalLabel">
              Reserve Item
            </h3>
          </div>
          <form action="../actions/reserve_add.php" method="post">
            <input type="hidden" id="readeridinput" name="readerid" value="<?php echo $_smarty_tpl->tpl_vars['readerid']->value;?>
">
			<input type="hidden" id="reserveitemidinput" name="itemid" value="0">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to reserve this item?
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
  
  <hr>
  
  <br>
  <h3><a onclick="goBack()"">Back to search results</a></h3>
  <br>
  
  <?php } ?>
</div>

<script>
function goBack() {
    window.history.back()
}
</script><?php }} ?>
