<?php /* Smarty version Smarty-3.1.15, created on 2014-04-28 11:38:29
         compiled from "/opt/lbaw/lbaw1342/public_html/proto/templates/main/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92852606535833d38fdfc1-02456858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef58ec8df4ca015a6b88b3b622d82b37867182aa' => 
    array (
      0 => '/opt/lbaw/lbaw1342/public_html/proto/templates/main/main.tpl',
      1 => 1398681484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92852606535833d38fdfc1-02456858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_535833d3903018_42219380',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535833d3903018_42219380')) {function content_535833d3903018_42219380($_smarty_tpl) {?><!-- Custom styles for this template -->
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
      Need help?
  </h4>
  <a href="mailto:help@gestorax.com">
    
    <i class="glyphicon glyphicon-envelope">
    </i>
    Send us an email
  </a>
  </div>
  </div><?php }} ?>
