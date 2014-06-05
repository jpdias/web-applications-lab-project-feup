<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 10:05:36
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/user/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:985214394535be1cc2e8f64-77013395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '639da5ee2effd32c80af1c193dcd4b1dc876420d' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/user/profile.tpl',
      1 => 1398537506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '985214394535be1cc2e8f64-77013395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535be1cc3234e4_25855030',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535be1cc3234e4_25855030')) {function content_535be1cc3234e4_25855030($_smarty_tpl) {?><!-- Custom styles for this template -->
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
            Analysis
          </a>
        </li>
        <li class="active">
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
                    Jose Kinsella
                  </h4>
                  <h5>
                    <label>
                      City: 
                      <label>
                        <span class="label label-info">
                          Porto
                        </span>
                      </h5>
                      
                      <h5>
                        <label>
                          Status: 
                          <label>
                            <span class="label label-success">
                              Active
                            </span>
                          </h5>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-10">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                  Edit profile details
                </button>
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
      
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                &times;
              </button>
              <h4 class="modal-title" id="myModalLabel">
                Profile details
              </h4>
            </div>
            <div class="row">
              <div class="col-md-12">
                <br>
                <br>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      First Name
                    </span>
                    <input type="text" class="form-control" placeholder="First Name">
                  </div>
                  
                  <br>
                </div>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Last Name
                    </span>
                    <input type="text" class="form-control" placeholder="Last Name">
                  </div>
                  <br>
                  
                </div>
                <br>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      City
                    </span>
                    <input type="text" class="form-control" placeholder="City">
                  </div>
                  
                  <br>
                </div>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Email
                    </span>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                  
                  <br>
                </div>
                <br>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      Previous Password
                    </span>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  
                  <br>
                </div>
                
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      New Password
                    </span>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  
                  <br>
                </div>
                <br>
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
