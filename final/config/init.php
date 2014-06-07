<?php
  session_set_cookie_params(3600, '/~lbaw1342'); //FIXME
  session_start();

  $BASE_DIR = '/opt/lbaw/lbaw1342/public_html/final/'; //FIXME
  $BASE_URL = '/~lbaw1342/final/'; //FIXME

  $conn = new PDO('pgsql:host=vdbm;dbname=lbaw1342','lbaw1342','fC602pb3'); //FIXME
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec('SET SCHEMA \'public\''); //FIXME

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);
  $smarty->assign('IDREADER', $_SESSION['idreader']);
  $smarty->assign('IDMANAGER', $_SESSION['idmanager']);
  
  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
