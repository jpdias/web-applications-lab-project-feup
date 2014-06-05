<?php /* Smarty version Smarty-3.1.15, created on 2014-04-26 19:38:29
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/search/search_results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1598339886535921be4eb8b8-01751533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ecbdbfc15cb53cdf64e3eca1776a28f27bcb8d' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/search/search_results.tpl',
      1 => 1398537506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1598339886535921be4eb8b8-01751533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535921be6f6b13_74936190',
  'variables' => 
  array (
    'results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535921be6f6b13_74936190')) {function content_535921be6f6b13_74936190($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/bootstrap-responsive.css" rel="stylesheet">

<div id="content">
  <div id="container" class="container">
    <div class="row">
      <!-- Results list and tabular data -->
      <br>
      <br>
      <br>
      <h1>
        &nbsp;&nbsp;&nbsp;
        <i class="glyphicon glyphicon-search">
        </i>
        Search Results
      </h1>
      
      <br>
      <div class="span9" id="results-main">
        
        <div id="results" class="results-on">
          
          <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
          
          <section class="result-part">
            <img id="result-thumb" class="pull-left" src="<?php echo $_smarty_tpl->tpl_vars['result']->value['image'];?>
">
            <h3>
              <a href="#" class="view-detail">
                
                <?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>

                
              </a>
            </h3>
            <p class="short-desc pull-left">
              
              <?php echo $_smarty_tpl->tpl_vars['result']->value['description'];?>

              
            </p>
            <div class="price-avail pull-right">
              <!-- star rating inputs -->
              <input name="rating1" type="radio" class="star">
              <input name="rating2" type="radio" class="star">
              <input name="rating3" type="radio" class="star">
              <input name="rating4" type="radio" class="star">
              <input name="rating5" type="radio" class="star" checked="checked">
              <!-- price and availability -->
              <p class="avail">
                Availability: 
                <?php echo $_smarty_tpl->tpl_vars['result']->value['currentstatus'];?>

                
              </p>
              <button class="btn btn-success">
                Request 
                <i class="glyphicon glyphicon-tag">
                </i>
              </button>
            </div>
          </section>
          
          <?php } ?>
          <br>
        </div>
      </div>
    </div>
  </div><?php }} ?>
