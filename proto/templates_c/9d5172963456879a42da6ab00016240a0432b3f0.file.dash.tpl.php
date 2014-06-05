<?php /* Smarty version Smarty-3.1.15, created on 2014-04-26 17:42:46
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/user/dash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1177389384535be206e1f3b1-28437412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5172963456879a42da6ab00016240a0432b3f0' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/user/dash.tpl',
      1 => 1398530536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1177389384535be206e1f3b1-28437412',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535be206e25148_85759491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535be206e25148_85759491')) {function content_535be206e25148_85759491($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">

</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class="active">
          <a href="#">
            Overview
          </a>
        </li>
        <li>
          <a href="#">
            Analysis
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
          <h1 class="page-header">
            Dashboard
          </h1>
          
          <h2 class="sub-header">
            Latest requests
          </h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
				  <th>
                    Item
                  </th>
                  <th>
                    Request date
                  </th>
                  <th>
                    Expire date
                  </th>
                  <th>
                    Status
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
				  <td>
                    Benq Projector
                  </td>
                  <td>
                    03/01/2014
                  </td>
                  <td>
                    10/01/2014
                  </td>
                  <td>
                    Expire date close
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
				  <td>
                    Benq Projector
                  </td>
                  <td>
                    04/01/2014
                  </td>
                  <td>
                    11/01/2014
                  </td>
                  <td>
                    Expire date close
                  </td>
                </tr>
				<tr>
                  <td>
                    3
                  </td>
				  <td>
                    Benq Projector
                  </td>
                  <td>
                    07/01/2014
                  </td>
                  <td>
                    14/01/2014
                  </td>
                  <td>
                    Valid
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>


<script src="../javascript/docs.min.js">
</script><?php }} ?>
