<?php
  include_once 'statusBar.php';
  require 'mysqlilib.php';
  ini_set('display_errors','off'); 
  
  $subject = test_input($_POST["subject"]);
  $content = test_input($_POST["content"]);
  $memberName = $_SESSION['memberName'];
  $current_time = date("Y-m-d H:i:s");
  $current_timel = date("YmdHis");
  $memberID = $_SESSION['memberID'];
  $fileName = $memberID . $current_timel . $_FILES["img"]["name"];
  $filePath = "upload/" . $fileName;

  if(isset($_SESSION['passed'])){
    if($subject == $_POST["subject"]){
      $db=new StockDB('localhost','root','','guestbook');
      if($_FILES['img']['error'] > 0){
        $qstr = "INSERT INTO message(subject, content, date, memberID , memberName ) VALUES('$subject', '$content', '$current_time', '$memberID' , '$memberName')";
        $data = $db->query($qstr);
        header("location:index.php");
      }else{
        move_uploaded_file($_FILES["img"]["tmp_name"], $filePath);
        $qstr = "INSERT INTO message( subject, content, date, memberID , memberName , img) VALUES('$subject', '$content', '$current_time', '$memberID', '$memberName' , '$filePath' )";
        $data = $db->query($qstr);
        header("location:index.php");
      }
    }
  }else{
    header("location:index.php");
  }
  
?>