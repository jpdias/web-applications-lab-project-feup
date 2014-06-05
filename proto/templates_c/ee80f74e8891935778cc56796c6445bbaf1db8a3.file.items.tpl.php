<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 08:46:37
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/manage/items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1636593572535be0ac351911-97964926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee80f74e8891935778cc56796c6445bbaf1db8a3' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/manage/items.tpl',
      1 => 1398537505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1636593572535be0ac351911-97964926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535be0ac3d6a80_64592019',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535be0ac3d6a80_64592019')) {function content_535be0ac3d6a80_64592019($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li>
          <a href="#">
            Overview
          </a>
        </li>
        <li class="active">
          <a href="#">
            Inventory
          </a>
        </li>
        <li>
          <a href="#">
            Statistics
          </a>
        </li>
        <li>
          <a href="#">
            Users
          </a>
        </li>
        <li>
          <a href="#">
            My profile
          </a>
        </li>
      </ul>
      <form class="body-form" role="search">
        <div class="input-group add-on">
          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search">
              </i>
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1>
        <i class="glyphicon glyphicon-search">
        </i>
        Search Items
      </h1>
      <div class="col-md-8">
        <form>
          <div class="input-group">
            <div class="input-group-btn">
              
              <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">
                Everything 
                <span class="caret">
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">
                    Item Title
                  </a>
                </li>
                <li>
                  <a href="#">
                    Item Description
                  </a>
                </li>
              </ul>
            </div>
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search">
                </i>
              </button>
            </div>
          </div>
        </form>
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
                  <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manage_item.php?itemid=<?php echo $_smarty_tpl->tpl_vars['result']->value['iditem'];?>
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
                  <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manage_item.php?itemid=<?php echo $_smarty_tpl->tpl_vars['result']->value['iditem'];?>
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
        <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal">
          <i class="glyphicon glyphicon-plus">
          </i>
          Add Item
        </button>
      </h4>
    </div>
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              New Item
            </h4>
          </div>
          <div class="row">
              <br>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Title
                  </span>
                  <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
">
                </div>
                
                <br>
              </div>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Description
                  </span>
                  <input type="text" class="form-control" placeholder="Item Description">
                </div>
                
                <br>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-primary">
                Save changes
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="../javascript/docs.min.js">
</script><?php }} ?>
