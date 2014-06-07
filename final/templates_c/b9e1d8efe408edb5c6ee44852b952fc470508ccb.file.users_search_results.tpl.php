<?php /* Smarty version Smarty-3.1.15, created on 2014-06-07 20:20:48
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/manager/users_search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13896496353936610ccfc30-23798277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e1d8efe408edb5c6ee44852b952fc470508ccb' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/manager/users_search_results.tpl',
      1 => 1402168339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13896496353936610ccfc30-23798277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IDMANAGER' => 0,
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53936610db0107_83092060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53936610db0107_83092060')) {function content_53936610db0107_83092060($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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
              <a onclick="document.getElementById('searchtype').value = 'readerid'">
                Reader Number
              </a>
            </li>
			<li>
              <a onclick="document.getElementById('searchtype').value = 'name'">
                Name
              </a>
            </li>
            <li>
              <a onclick="document.getElementById('searchtype').value = 'email'">
                E-mail
              </a>
            </li>
          </ul>
        </div>
        <form class="body-form" role="search" method="get" action="../pages/manager_users_search_results.php">
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
              Name
            </th>
            <th>
              E-mail
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
              <?php echo $_smarty_tpl->tpl_vars['result']->value['idreader'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['result']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['result']->value['lastname'];?>

            </td>
			<td>
              <?php echo $_smarty_tpl->tpl_vars['result']->value['email'];?>

            </td>
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_user.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
&readerid=<?php echo $_smarty_tpl->tpl_vars['result']->value['idreader'];?>
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
