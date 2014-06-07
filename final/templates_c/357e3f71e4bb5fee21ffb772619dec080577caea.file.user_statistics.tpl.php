<?php /* Smarty version Smarty-3.1.15, created on 2014-06-02 22:17:50
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/user/user_statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:533155605538ce876c19d87-54075252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '357e3f71e4bb5fee21ffb772619dec080577caea' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/user/user_statistics.tpl',
      1 => 1401743864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '533155605538ce876c19d87-54075252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_538ce876cfae76_29559709',
  'variables' => 
  array (
    'requestSize' => 0,
    'reserveSize' => 0,
    'allReq' => 0,
    'result' => 0,
    'allRes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538ce876cfae76_29559709')) {function content_538ce876cfae76_29559709($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header">
    Statistics
  </h2>
  <div class="col-md-12">
	<h3>Reserves and Requesitions by Month</h3>
	<canvas id="canvas1" height="300" width="900"></canvas>
  </div>
  <div class="col-md-12">

  <h3>Total Reserves and Requesitions</h3>
<center>
	<canvas id="canvas" height="300" width="300"></canvas></center>
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
