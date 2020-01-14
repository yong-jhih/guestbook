<?php
  include_once 'statusBar.php';
  require 'mysqlilib.php';
  ini_set('display_errors','off'); 
  $db=new StockDB('localhost','root','','guestbook');

  $content = $_POST["reply"];
  $current_time = date("Y-m-d H:i:s");
  $memberID = $_SESSION['memberID'];
  $memberName = $_SESSION['memberName'];
  $subID = $_POST["subID"];

  if(isset($_SESSION['passed'])){
    $qstr = "INSERT INTO message(subID , content, date, memberID , memberName , type ) VALUES('$subID','$content', '$current_time', '$memberID', '$memberName' , '2')";
    $data = $db->query($qstr);
    header("location:index.php");
  }else{
    header("location:index.php");
  }
  
?>