<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 08:46:03
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/manage/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2014429633535be056511be5-05761853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '361db9c8abe1c7c7c60800a79e6840e8b3bde9d9' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/manage/user.tpl',
      1 => 1398537505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2014429633535be056511be5-05761853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535be056515f30_61031102',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535be056515f30_61031102')) {function content_535be056515f30_61031102($_smarty_tpl) {?><!-- Custom styles for this template -->
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
    
	<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="well well-sm">
              <div class="media">
                <a class="thumbnail pull-left" style="margin-bottom:0px;" href="#">
                  <img class="media-object"   src="http://www.gravatar.com/avatar/a13ac7aed64918b6354f48da59490e3a?s=80">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">
                    <?php echo $_smarty_tpl->tpl_vars['result']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['result']->value['lastname'];?>

                  </h4>
                  <h5>
                    <label>
                      City: 
                      <label>
                        <span class="label label-info">
                          <?php echo $_smarty_tpl->tpl_vars['result']->value['address'];?>

                        </span>
                      </h5>
                      
                      <h5>
                        <label>
                          Status: 
                          <label>
                            <span class="label label-success">
                              <?php echo $_smarty_tpl->tpl_vars['result']->value['currentstatus'];?>

                            </span>
                          </h5>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <h3>
                  Account status: 
                  <button class="btn btn-danger">
                    Disable Account
                  </button>
                </h3>
              </div>
              <div class="col-md-5">
                <h3>
                  Permissions: 
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">
                      User
                    </button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                      <span class="caret">
                      </span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li>
                        <a href="#">
                          Administrator
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Manager
                        </a>
                      </li>
                    </ul>
                  </div>
                </h3>
              </div>
              <br>
              <br>
              <br>
              <br>
              <div class="col-md-10">
                <h2 class="sub-header">
                  History
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
                          Info
                        </th>
                        <th>
                          Details
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Jose Kinsella
                        </td>
                        <td>
                          Request
                        </td>
                        <th>
                          <button class="btn btn-default btn-xs" type="submit" href="productpage">
                            <i class="glyphicon glyphicon-plus">
                            </i>
                          </button>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        <td>
                          Jose Kinsella
                        </td>
                        <td>
                          Expire date close
                        </td>
                        <th>
                          <button class="btn btn-default btn-xs" type="submit" href="productpage">
                            <i class="glyphicon glyphicon-plus">
                            </i>
                          </button>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php } ?>
  </div>
</div>


<script src="../javascript/docs.min.js">
</script><?php }} ?>
