<?php
  include_once('../config/init.php');
  
  
  $smarty->display('common/header.tpl');
  
  $smarty->display('search/search.tpl');
   
  $smarty->display('common/footer.tpl');
?>