<?php /* Smarty version Smarty-3.1.15, created on 2014-06-06 20:47:45
         compiled from "/opt/lbaw/lbaw1342/public_html/final/templates/main/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106690664653921ae1b2ae88-08774034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd507f5ec51920ff5e13c51c18f34dba88ad64a15' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/final/templates/main/main.tpl',
      1 => 1401896309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106690664653921ae1b2ae88-08774034',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53921ae1b2f9e3_22222089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53921ae1b2f9e3_22222089')) {function content_53921ae1b2f9e3_22222089($_smarty_tpl) {?><!-- Custom styles for this template -->
<link href="../css/jumbotron.css" rel="stylesheet">
<link href="../css/bootstrap-tagsinput.css" rel="stylesheet">

<div class="jumbotron">
  <div class="container">
    <div class="col-md-6">
      <h1>
        <i class="glyphicon glyphicon-search">
        </i>
        Search
      </h1>
      <form class="body-form" role="search" method="get" action="../pages/search_results.php">
        <div class="input-group">
          <input name="tags" type="text" class="form-control" data-role="tagsinput" placeholder="Add tags" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search">
              </i>
            </button>
          </div>
        </div>
        <br>
        <a href="../pages/search.php">
          Advanced search
        </a>
      </form>
    </div>
    <div class="col-md-6">
      <center>
        <img href="" src="../resources/logo.png" style="width:35%;hight:35%">
      </img>
    </center>
  </div>
</div>
</div>
<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>
        About Us
      </h2>
      <br>
      <a href="http://nuieee.fe.up.pt">
        IEEE Universidade do Porto - Student Branch
      </a>
      <p>
        IEEE is the world's largest professional association dedicated to advancing technological innovation and excellence for the benefit of humanity.
      </p>
    </div>
    <div class="col-md-4">
      <h2>
        What is this?
      </h2>
    </br>
    <p>
      Need some equipment? Search in our database and see if we have it! If we have it, we can borrow it to you! All safe, with email alerts and history of the equipments!
    </p>
  </div>
  <div class="col-md-4">
    <h2>
      Help Center
    </h2>
  </br>
  <p>
    <h4>
	Recover passord:
  </h4>
  <a href="../pages/recover_password.php">
	Recover Password
  </a>
  <h4>
	Need help?
  </h4>
  <a href="mailto:help@gestorax.com">
    <i class="glyphicon glyphicon-envelope">
    </i>
    Send us an email
  </a>
  </div>
  </div><?php }} ?>
