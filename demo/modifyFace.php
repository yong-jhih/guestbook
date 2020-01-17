<?php
  include_once 'statusBar.php';
  require 'mysqlilib.php';
  ini_set('display_errors','on');
  $memberID = $_SESSION['memberID'];
  $db=new StockDB('localhost','root','','guestbook');

  $oldPath=$_POST['oldPath'];
  $current_timel = date("YmdHis");
  $fileName = $memberID . $current_timel . $_FILES["Face"]["name"];
  $filePath = "upload/" . $fileName;
  $way=$_POST['way'];

  if(isset($_SESSION['passed'])){
    // 只刪除原圖及路徑
    if($way=='delete'){
      if(is_file($oldPath)){
        unlink($oldPath);
      }
      $qstr = "UPDATE member SET Face=NULL WHERE memberID='$memberID'";
      $db->query($qstr);

    // 更換圖片
    }elseif($way=='change'){
      if(is_file($oldPath)){
        unlink($oldPath);
      }

      if($_FILES['Face']['error'] == 0){
        $qstr = "UPDATE member SET Face='$filePath' WHERE memberID='$memberID'";
        $data = $db->query($qstr);
        move_uploaded_file($_FILES["Face"]["tmp_name"], $filePath);
        $data = $db->query($qstr);
      }
    }
    if($_SESSION['permission']==0){
      header("location:manager.php");
    }else{
      header("location:member.php");
    }
  }else{
    header("location:index.php");
  }
      
?>