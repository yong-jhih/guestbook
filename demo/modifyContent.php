<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off');

    $content = $_POST['content'];
    $contentID = $_POST['contentID'];
    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "UPDATE message SET content='$content' WHERE postID='$contentID'";
    
    if(isset($_COOKIE['passed'])){
        $data = $db->query($qstr);
        header("location:member.php");
    }else{
        header("location:index.php");
    }
?>