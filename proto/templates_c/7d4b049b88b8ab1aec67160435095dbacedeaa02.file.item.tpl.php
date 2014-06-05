<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 08:46:40
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/manage/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:407624333535be0a70c6f09-17895581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d4b049b88b8ab1aec67160435095dbacedeaa02' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/manage/item.tpl',
      1 => 1398537505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '407624333535be0a70c6f09-17895581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535be0a7152f50_58135254',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535be0a7152f50_58135254')) {function content_535be0a7152f50_58135254($_smarty_tpl) {?><!-- Custom styles for this template -->
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
        
		<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
        <br>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="well well-sm">
                  <div class="media">
                    <a class="pull-left" style="margin-bottom:0px;" href="#">
                      <img class="thumbnail media-object" src="<?php echo $_smarty_tpl->tpl_vars['result']->value['image'];?>
" width="185px" height="135px">
                      <h4>
                        Edit image
                      </h4>
                    </a>
                    <div class="media-body">
                      <h3 class="media-heading">
                        <?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>

                      </h4>
                      <br>
                      <h4>
                        <label>
                          Description: 
                          <label>
                          </h4>
                          <h5>
                            <?php echo $_smarty_tpl->tpl_vars['result']->value['description'];?>

                          </h5>
                          <br>
                          <h4>
                            <label>
                              Status: 
                              <label>
                                <span class="label label-success">
                                  <?php echo $_smarty_tpl->tpl_vars['result']->value['currentstatus'];?>

                                </span>
                              </h4>
                            </div>
                          </div>
                        </div>
                      </div>
					</div>
                              </div>
                              <div class="col-md-10">
                                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                  Edit Item
                                </button>
                              </div>
                              <div class="col-md-10">
                                <h2>
                                  <button class="btn btn-danger">
                                    Disable Item
                                  </button>
                                </h2>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
          <?php } ?>
          
		  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                  </button>
                  <h4 class="modal-title" id="myModalLabel">
                    Edit Item
                  </h4>
                </div>
                <div class="row">
              <br>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Title
                  </span>
                  <input type="text" class="form-control" placeholder="Item Title" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
">
                </div>
                
                <br>
              </div>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Description
                  </span>
                  <input type="text" class="form-control" placeholder="Item Description" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['description'];?>
">
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
	

<script src="../javascript/docs.min.js">
</script><?php }} ?>
