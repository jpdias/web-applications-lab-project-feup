<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 08:45:28
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/manage/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1580626546535be0a0b8c8d7-79584127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12024cfa4d3ef2f17d86fd577401244c879ac259' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/manage/users.tpl',
      1 => 1398537505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1580626546535be0a0b8c8d7-79584127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535be0a0c0fc41_01146756',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535be0a0c0fc41_01146756')) {function content_535be0a0c0fc41_01146756($_smarty_tpl) {?><!-- Custom styles for this template -->
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
        <li>
          <a href="#">
            Inventory
          </a>
        </li>
        <li>
          <a href="#">
            Statistics
          </a>
        </li>
        <li class="active">
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
            Search Users
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
                        Name
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        City
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
                      Email
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
                      <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manage_user.php?readerid=<?php echo $_smarty_tpl->tpl_vars['result']->value['idreader'];?>
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
                      Email
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
					  <button class="btn btn-default btn-xs" type="submit" onclick="window.location.href='../pages/manage_user.php?readerid=<?php echo $_smarty_tpl->tpl_vars['result']->value['idreader'];?>
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
        </div>
  </div>
</div>


<script src="../javascript/docs.min.js">
</script><?php }} ?>
