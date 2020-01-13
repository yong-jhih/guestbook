<?php
    include_once 'statusBar.php';
    require 'mysqlilib.php';
    ini_set('display_errors','off');
    $deleteID = $_POST['deleteID'];

    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "DELETE FROM message where postID='$deleteID'";
    $data = $db->query($qstr);

    if(isset($_COOKIE['passed'])){
        echo json_encode($deleteID);
        header("location:member.php");
    }else{
        header("location:index.php");
    }
?>