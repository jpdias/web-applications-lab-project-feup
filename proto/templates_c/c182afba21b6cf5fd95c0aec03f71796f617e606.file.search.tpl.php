<?php /* Smarty version Smarty-3.1.15, created on 2014-05-03 00:16:01
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/search/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16148309535bfcdf5dda64-21351705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c182afba21b6cf5fd95c0aec03f71796f617e606' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/search/search.tpl',
      1 => 1398681484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16148309535bfcdf5dda64-21351705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535bfcdf65bec8_21739382',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bfcdf65bec8_21739382')) {function content_535bfcdf65bec8_21739382($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/search.css" rel="stylesheet">
<link href="../css/bootstrap-tagsinput.css" rel="stylesheet">

<div class="container">
  <form class="form-signin" role="form" method="get" action="../pages/search_results.php">
    <h1>
      <i class="glyphicon glyphicon-search">
      </i>
      Search
    </h1>
  </br>
  <h4>
    Using tags
  </h4>
  <input name="tags" type="text" value="" data-role="tagsinput" placeholder="Add tags"/>
  <br>
  <br>
  <h4>
    Or using item number
  </h4>
  <input name="itemnumber" type="number" class="form-control" placeholder="Enter item number">
  <br>
  <br>
  <label class="checkbox">
    <input name="onlyavailableitems" type="checkbox" value="yes">
    Search only available items.
  </label>
  <button class="btn btn-lg btn-info btn-block" type="submit">
    Search
  </button>
</form>
</div>
</div><?php }} ?>
