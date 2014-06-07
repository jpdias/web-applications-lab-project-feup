<?php /* Smarty version Smarty-3.1.15, created on 2014-06-05 18:54:00
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/manager/results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1696423136538e1d762d3a43-99028605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '999f525c00f7382b3b7d85993eaac7610ac9c58f' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/manager/results.tpl',
      1 => 1401990836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1696423136538e1d762d3a43-99028605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_538e1d763ed675_25348448',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538e1d763ed675_25348448')) {function content_538e1d763ed675_25348448($_smarty_tpl) {?><!-- Custom styles for this template -->

<link href="../css/bootstrap-tagsinput.css" rel="stylesheet">
<script src="../javascript/jPages.js"></script>


      <!-- Results list and tabular data -->

	  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		  <br>
		  <br>
		  <br>
		 <div class="col-md-12">
		  <div class="col-md-3">
		  <h2>
			&nbsp;&nbsp;&nbsp;
			<i class="glyphicon glyphicon-search"></i>
			Search
		  </h2>
		  </div>
		  <div class="col-md-9">
			  <div class="col-md-6">
				<form class="body-form" role="search" method="get" action="../pages/manager_search.php">
			<div class="input-group">
			  <input name="tags" type="text" class="form-control" data-role="tagsinput" placeholder="Add tags" name="srch-term" id="srch-term">
			  <div class="input-group-btn">
				<button class="btn btn-default" type="submit">
				  <i class="glyphicon glyphicon-search">
				  </i>
				</button>
			  </div>
			</div>
			<br>
			  <h4><?php echo $_smarty_tpl->tpl_vars['resultsCount']->value;?>
 result(s) for <?php echo $_smarty_tpl->tpl_vars['resultsParameter']->value;?>
 in <?php echo $_smarty_tpl->tpl_vars['resultsTimeElapsed']->value;?>
 ms</h4>

			  </form>
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
				  <a href="#" class="view-detail">

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
						<button class="btn btn-success" data-toggle="modal" data-target="#requestItemModal" onclick="document.getElementById('itemidinput').value = <?php echo $_smarty_tpl->tpl_vars['result']->value['iditem'];?>
">
							<i class="glyphicon glyphicon-tag">
							</i>
							Request
						</button>
					<?php } else { ?>
						Availability: <?php echo $_smarty_tpl->tpl_vars['result']->value['currentstatus'];?>

						<br>
						<br>
						<button class="btn btn-primary" data-toggle="modal" data-target="#reserverModal">
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
		<h4><div class="holder" ></div></h4>
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
			<input type="hidden" id="itemidinput" name="itemid" value="0">
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


<script>
$(document).ready(function () {

$("div.holder").jPages({
containerID: "itemContainer",
perPage: 5
});
});
</script>
<?php }} ?>
