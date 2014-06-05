<?php /* Smarty version Smarty-3.1.15, created on 2014-06-05 18:00:53
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/search/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1005031422538301c8195559-60803592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9326fbcd9d597319c0988eee281dbcd4b803eab2' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/search/search.tpl',
      1 => 1401818786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1005031422538301c8195559-60803592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_538301c821a2b0_48077780',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538301c821a2b0_48077780')) {function content_538301c821a2b0_48077780($_smarty_tpl) {?><!-- Custom styles for this template -->
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
