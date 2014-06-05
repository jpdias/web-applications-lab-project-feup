<?php /* Smarty version Smarty-3.1.15, created on 2014-04-26 17:26:54
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/manage/add_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2104373610535bdd108e4859-15602391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f49c4764fb56ec8f0f1864b175a8dffbf089698' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/manage/add_item.tpl',
      1 => 1398529611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2104373610535bdd108e4859-15602391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535bdd109a6238_19947019',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bdd109a6238_19947019')) {function content_535bdd109a6238_19947019($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li><a href="#">Overview</a>
				</li>
				<li class="active"><a href="#">Inventory</a>
				</li>
				<li><a href="#">Statistics</a>
				</li>
				<li><a href="#">Users</a>
				</li>
				<li><a href="#">My profile</a>
				</li>
			</ul>
			<form class="body-form" role="search">
				<div class="input-group add-on">
					<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h1><i class="glyphicon glyphicon-plus"></i> Add Item</h1>
						<br>
						<br>
						<div class="col-md-9">
							<div class="input-group">
								<span class="input-group-addon">Item Title</span>
								<input type="text" class="form-control" placeholder="Item Title">
							</div>
							<br>
						</div>
						<div class="col-md-9">
							<div class="input-group">
								<span class="input-group-addon">Item Description</span>
								<input type="text" class="form-control" placeholder="Item Description">
							</div>
							<br>
							<br>
							<h4> Item image:</h4>
							<button class="btn btn-default" type="submit">Select image...</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
<script src="../javascript/docs.min.js"></script><?php }} ?>
