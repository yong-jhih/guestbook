<?php
  include_once 'statusBar.php';
  require '../libs/Smarty.class.php';
  $smarty = new Smarty;
  $smarty->debugging = true;
  $smarty->caching = true;
  $smarty->cache_lifetime = 120;
  $smarty->display('register.tpl');

?>