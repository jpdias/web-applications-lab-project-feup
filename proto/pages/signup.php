<?php
  include_once('../config/init.php');
  
  
  $smarty->display('common/header.tpl');
  
  $smarty->display('common/menu_logged_out.tpl');
  
  $smarty->display('main/signup.tpl');
   
  $smarty->display('common/footer.tpl');
?>