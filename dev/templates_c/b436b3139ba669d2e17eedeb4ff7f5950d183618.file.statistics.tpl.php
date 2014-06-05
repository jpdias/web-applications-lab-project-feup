<?php /* Smarty version Smarty-3.1.15, created on 2014-06-03 19:24:48
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/manager/statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1326778104538c49c3682fc3-36300295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b436b3139ba669d2e17eedeb4ff7f5950d183618' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/manager/statistics.tpl',
      1 => 1401818786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1326778104538c49c3682fc3-36300295',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_538c49c372d339_58707455',
  'variables' => 
  array (
    'requestSize' => 0,
    'reserveSize' => 0,
    'disabled' => 0,
    'repair' => 0,
    'active' => 0,
    'allReq' => 0,
    'result' => 0,
    'allRes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c49c372d339_58707455')) {function content_538c49c372d339_58707455($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header">
    Statistics
  </h2>
  <div class="col-md-12">
  <div class="col-md-6">
  <h3>Total Reserves and Requesitions</h3>
	<canvas id="canvas" height="300" width="300"></canvas>
  </div>
  <div class="col-md-6">
<h4>Active items, repairs and disabled items</h4>
	<canvas id="canvas3" height="300" width="300"></canvas>
  </div>

  </div>
  <div class="col-md-12">
	<h3>Reserves and Requesitions by Month</h3>
	<canvas id="canvas1" height="300" width="900"></canvas>
  </div>
  <script src="../javascript/chart.js"></script>
  <script src="../javascript/tag.js"></script>
	<script>

		var pieData = [
		{
		value: <?php echo $_smarty_tpl->tpl_vars['requestSize']->value;?>
,
		color:"#5CB85C",
		label : 'Requesitions',
        labelColor : 'white',
        labelFontSize : '20'
		},
		{
		value : <?php echo $_smarty_tpl->tpl_vars['reserveSize']->value;?>
,
		color:"#428BCA",
		label : 'Reserves',
        labelColor : 'white',
        labelFontSize : '20'
		}
		];

		var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Pie(pieData);
		
				var pieData2 = [
		{
		value: <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
,
		color:"#D43F3A",
		label : 'Disabled',
        labelColor : 'white',
        labelFontSize : '20'
		},
		{
		value : <?php echo $_smarty_tpl->tpl_vars['repair']->value;?>
,
		color:"#428BCA",
		label : 'Repair',
        labelColor : 'white',
        labelFontSize : '20'
		},
		{
		value : <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
,
		color:"#5CB85C",
		label : 'Active',
        labelColor : 'white',
        labelFontSize : '20'
		}
		];

		var myPie1 = new Chart(document.getElementById("canvas3").getContext("2d")).Pie(pieData2);
		var allData = [];
			<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allReq']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
	
				allData.push(<?php echo $_smarty_tpl->tpl_vars['result']->value;?>
);
			<?php } ?>
		var allData2 = [];
			<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allRes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
				
				allData2.push(<?php echo $_smarty_tpl->tpl_vars['result']->value;?>
);
			<?php } ?>
		var data = {
			labels : ["January","February","March","April","May","June","July", "August","September","October","November","December"],
			datasets : [
				{
					fillColor : "#428BCA",
					strokeColor : "#428BCA",
					data :  allData
				},
				{
					fillColor : "#5CB85C",
					strokeColor : "#5CB85C",
					data :  allData2
				},
			]
		}
		var bars  = new Chart(document.getElementById("canvas1").getContext("2d")).Bar(data);
	</script>
</div><?php }} ?>
