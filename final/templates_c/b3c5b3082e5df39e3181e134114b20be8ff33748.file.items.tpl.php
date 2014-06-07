<?php /* Smarty version Smarty-3.1.15, created on 2014-06-07 20:00:44
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/manager/items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16938508875392451314d030-26886763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3c5b3082e5df39e3181e134114b20be8ff33748' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/manager/items.tpl',
      1 => 1402167642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16938508875392451314d030-26886763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539245131e2259_55721464',
  'variables' => 
  array (
    'IDMANAGER' => 0,
    'activeitems' => 0,
    'activeitem' => 0,
    'newitems' => 0,
    'newitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539245131e2259_55721464')) {function content_539245131e2259_55721464($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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
      Active items
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
          <?php  $_smarty_tpl->tpl_vars['activeitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activeitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activeitem']->key => $_smarty_tpl->tpl_vars['activeitem']->value) {
$_smarty_tpl->tpl_vars['activeitem']->_loop = true;
?>
          <tr>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['activeitem']->value['iditem'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['activeitem']->value['name'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['activeitem']->value['description'];?>

            </td>
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_item.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
&itemid=<?php echo $_smarty_tpl->tpl_vars['activeitem']->value['iditem'];?>
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
  <div class="col-md-6">
    <h2 class="sub-header">
      New Items
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
          <?php  $_smarty_tpl->tpl_vars['newitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newitem']->key => $_smarty_tpl->tpl_vars['newitem']->value) {
$_smarty_tpl->tpl_vars['newitem']->_loop = true;
?>
          <tr>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['newitem']->value['iditem'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['newitem']->value['name'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['newitem']->value['description'];?>

            </td>
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_item.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
&itemid=<?php echo $_smarty_tpl->tpl_vars['newitem']->value['iditem'];?>
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
  <br>
  <br>
  <br>
  <br>
  <h4>
    <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#addItemModal">
      <i class="glyphicon glyphicon-plus">
      </i>
      Add Item
    </button>
  </h4>
</div>

<div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="addItemModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h3 class="modal-title" id="addItemModalLabel">
          Add Item
        </h3>
        <form action="../actions/item_add.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <br>
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon">
                  Item Name
                </span>
                <input type="text" class="form-control" name="itemname" placeholder="Item Name">
              </div>
              <br>
            </div>
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-addon">
                  Item Description
                </span>
                <input type="text" class="form-control" name="itemdescription" placeholder="Item Description">
              </div>
              <br>
            </div>
            <div class="col-md-12">
              <br>
              <div class="input-group">
				<h4>Item Image:</h4>
                <input type="file" name="file" id="file">
              </div>
            </div>
            <br>
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
</div><?php }} ?>
