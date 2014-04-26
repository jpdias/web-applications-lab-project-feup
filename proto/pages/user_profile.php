<?php
  include_once('../config/init.php');
  
  
  $smarty->display('common/header.tpl');
  
  $smarty->display('common/menu_logged_in.tpl');
  
  $smarty->display('user/profile.tpl');
?>