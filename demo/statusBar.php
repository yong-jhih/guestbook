<?php
  require '../libs/Smarty.class.php';
  $smarty = new Smarty;
  $smarty->debugging = true;
  $smarty->caching = true;
  $smarty->cache_lifetime = 120;
  $smarty->display('status.tpl');

  if(isset($_COOKIE['passed'])){
    $memberName = $_COOKIE['memberName'];
    $smarty->assign("memberName",$memberName);
    $smarty->assign("passed","true");
  }else{
    $smarty->assign("passed","false");
  }

?>