<?php /* Smarty version Smarty-3.1.15, created on 2014-04-26 17:30:08
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/manage/dash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:997379895535bdf10514e85-08290554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe93d72e5ce39b79142b361427de489c8a3cb3f' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/manage/dash.tpl',
      1 => 1398529802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '997379895535bdf10514e85-08290554',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535bdf10517512_52939686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bdf10517512_52939686')) {function content_535bdf10517512_52939686($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">

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
      <div class="col-md-4">
        <br>
      </div>
      <div class="col-md-10">
        <h2 class="sub-header">
          Latest info
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


<script src="../javascript/docs.min.js">
</script><?php }} ?>
