<?php
  include_once('../config/init.php');
  
  
  $smarty->display('common/header.tpl');
  
  $smarty->display('main/signin.tpl');
   
  $smarty->display('common/footer.tpl');
?>