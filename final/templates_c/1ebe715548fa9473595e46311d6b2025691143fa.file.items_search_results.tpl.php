<?php /* Smarty version Smarty-3.1.15, created on 2014-06-07 20:54:03
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/manager/items_search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122934365353936393658895-76535601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ebe715548fa9473595e46311d6b2025691143fa' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/manager/items_search_results.tpl',
      1 => 1402168744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122934365353936393658895-76535601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53936393734e58_55915050',
  'variables' => 
  array (
    'IDMANAGER' => 0,
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53936393734e58_55915050')) {function content_53936393734e58_55915050($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1>
    <i class="glyphicon glyphicon-search">
    </i>
    Search Items
  </h1>
  <div class="col-md-8">
      <div class="input-group">
        <div class="input-group-btn">
          <script src="../javascript/dropdown.js"></script>
          <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">
            <span class="caret">
            </span>
          </a>
           <ul class="dropdown-menu">
            <li>
              <a onclick="document.getElementById('searchtype').value = 'itemnumber'">
                Item Number
              </a>
            </li>
			<li>
              <a onclick="document.getElementById('searchtype').value = 'tags'">
                Item Name
              </a>
            </li>
            <li>
              <a onclick="document.getElementById('searchtype').value = 'description'">
                Item Description
              </a>
            </li>
          </ul>
        </div>
        <form class="body-form" role="search" method="get" action="../pages/manager_items_search_results.php">
		<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
">
		<input type="hidden" id="searchtype" name="searchtype" value="itemnumber">
		<input type="text" class="form-control" placeholder="Search" name="searchfield" id="searchfield">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search">
            </i>
          </button>
        </div>
		</form>
      </div>
    <br>
  </div>
  <div class="col-md-4">
    <br>
  </div>
  <div class="col-md-6">
    <h2 class="sub-header">
      Search Results
    </h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              #
            </th>
            <th>
              Title
            </th>
            <th>
              Description
            </th>
            <th>
              Info
            </th>
          </tr>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
          <tr>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['result']->value['iditem'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['result']->value['description'];?>

            </td>
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_item.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
&itemid=<?php echo $_smarty_tpl->tpl_vars['result']->value['iditem'];?>
'">
                <i class="glyphicon glyphicon-plus">
                </i>
              </button>
            </th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div><?php }} ?>
