<?php /* Smarty version Smarty-3.1.15, created on 2014-06-04 01:46:50
         compiled from "/opt/lbaw/lbaw1342/public_html/dev/templates/manager/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18778484005367baf8c13077-29390322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a140c3a59cbba05a5fb44c30131664b8f01e21d' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/dev/templates/manager/users.tpl',
      1 => 1401842807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18778484005367baf8c13077-29390322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5367baf8cb41b9_00662524',
  'variables' => 
  array (
    'activeusers' => 0,
    'activeuser' => 0,
    'IDMANAGER' => 0,
    'newusers' => 0,
    'newuser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5367baf8cb41b9_00662524')) {function content_5367baf8cb41b9_00662524($_smarty_tpl) {?><div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1>
    <i class="glyphicon glyphicon-search">
    </i>
    Search Users
  </h1>
  <div class="col-md-8">
    <form>
      <div class="input-group">
        <div class="input-group-btn">
          <script src="../javascript/dropdown.js"></script>
          <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">
            Everything 
            <span class="caret">
            </span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">
                Name
              </a>
            </li>
            <li>
              <a href="#">
                Address
              </a>
            </li>
			<li>
              <a href="#">
                E-mail
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
      Active users
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
            <th>
              Info
            </th>
          </tr>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['activeuser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activeuser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeusers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activeuser']->key => $_smarty_tpl->tpl_vars['activeuser']->value) {
$_smarty_tpl->tpl_vars['activeuser']->_loop = true;
?>
          <tr>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['activeuser']->value['idreader'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['activeuser']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['activeuser']->value['lastname'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['activeuser']->value['email'];?>

            </td>
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_user.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
&readerid=<?php echo $_smarty_tpl->tpl_vars['activeuser']->value['idreader'];?>
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
      New Users
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
            <th>
              Info
            </th>
          </tr>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['newuser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newuser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newusers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newuser']->key => $_smarty_tpl->tpl_vars['newuser']->value) {
$_smarty_tpl->tpl_vars['newuser']->_loop = true;
?>
          <tr>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['newuser']->value['idreader'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['newuser']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['newuser']->value['lastname'];?>

            </td>
            <td>
              <?php echo $_smarty_tpl->tpl_vars['newuser']->value['email'];?>

            </td>
            <th>
              <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manager_user.php?id=<?php echo $_smarty_tpl->tpl_vars['IDMANAGER']->value;?>
&readerid=<?php echo $_smarty_tpl->tpl_vars['newuser']->value['idreader'];?>
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
