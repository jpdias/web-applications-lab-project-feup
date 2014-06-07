<?php /* Smarty version Smarty-3.1.15, created on 2014-06-07 12:36:58
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/search/search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15923809745392f95a91d332-82748244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88a031f7dcf27b49258579d24a237fe61bfaca51' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/search/search_results.tpl',
      1 => 1401825688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15923809745392f95a91d332-82748244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resultsCount' => 0,
    'resultsParameter' => 0,
    'resultsTimeElapsed' => 0,
    'results' => 0,
    'result' => 0,
    'readerid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5392f95aa5f8c1_96267573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5392f95aa5f8c1_96267573')) {function content_5392f95aa5f8c1_96267573($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/bootstrap-tagsinput.css" rel="stylesheet">

<script src="../javascript/jPages.js">
</script>

<div id="content">
  <div id="container" class="container">
    <div class="row">
      <!-- Results list and tabular data -->
      
	  <div class="col-md-12">
        <br>
        <br>
        <br>
        <div class="col-md-4">
		  <h1>
			&nbsp;&nbsp;&nbsp;
			<i class="glyphicon glyphicon-search">
            </i>
			Search
            </h1>
        </div>
        <div class="col-md-8">
          <div class="col-md-6">
            <form class="body-form" role="search" method="get" action="../pages/search_results.php">
              <div class="input-group">
                <input name="tags" type="text" class="form-control" data-role="tagsinput" placeholder="Add tags" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search">
                    </i>
                  </button>
                </div>
              </div>
			  </form>
              <br>
			  <h4>
                <?php echo $_smarty_tpl->tpl_vars['resultsCount']->value;?>
 result(s) for <?php echo $_smarty_tpl->tpl_vars['resultsParameter']->value;?>
 in <?php echo $_smarty_tpl->tpl_vars['resultsTimeElapsed']->value;?>
 ms
              </h4>
            </div>
            
        </div>
        
	  </div>
      
	  <div class="col-md-12">
        
        <hr>
	  </div>
      <div class="col-md-12" id="results-main">
        
        <ul id="itemContainer" style="list-style: none">
          
          <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
          
          <li>
            <div class="col-md-12" style="padding-top:30px">
			  <div class="col-md-6">
                <div class="col-md-6">
                  <img id="result-thumb" src="<?php echo $_smarty_tpl->tpl_vars['result']->value['image'];?>
">
                </div>
                <div class="col-md-6">
                  <h3>
                    <a href="../pages/item.php?itemid=<?php echo $_smarty_tpl->tpl_vars['result']->value['iditem'];?>
" class="view-detail">
                      
                      <?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>

                      
                    </a>
                  </h3>
                  
				  
                 <?php echo $_smarty_tpl->tpl_vars['result']->value['description'];?>

                 
				</div>
                
                </div>
                <div class="col-md-6" style="text-align:right;float:right">
                  
                  <?php if ($_smarty_tpl->tpl_vars['result']->value['currentstatus']=='available') {?>
                  Availability: <?php echo $_smarty_tpl->tpl_vars['result']->value['currentstatus'];?>

                  <br>
                  <br>
                  <button class="btn btn-success" data-toggle="modal" data-target="#requestItemModal" onclick="document.getElementById('requestitemidinput').value = <?php echo $_smarty_tpl->tpl_vars['result']->value['iditem'];?>
">
                    <i class="glyphicon glyphicon-tag">
                    </i>
                    Request
                  </button>
                  <?php } else { ?>
                  Availability: <?php echo $_smarty_tpl->tpl_vars['result']->value['currentstatus'];?>

                  <br>
                  <br>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#reserveItemModal" onclick="document.getElementById('reserveitemidinput').value = <?php echo $_smarty_tpl->tpl_vars['result']->value['iditem'];?>
">
                    <i class="glyphicon glyphicon-tag">
                    </i>
                    Reserve 
                  </button>
                  <?php }?>
                  
				</div>
				
               </div>
               
          </li>
          
          <?php } ?>
          
		</ul>
		<div  class="col-md-12" style="margin-top:30px;">
          <center>
            <h4>
              <div class="holder" >
              </div>
            </h4>
          </center>
		</div>
      </div>
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
</div>

<script>
$(document).ready(function ()
{
	$("div.holder").jPages({
	containerID: "itemContainer",
	perPage: 5
	});
});
</script><?php }} ?>
