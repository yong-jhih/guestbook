<?php
    require_once 'db_connect.php';
    $content = $_POST['content'];
    $contentID = $_POST['contentID'];
    if(isset($_COOKIE['passed'])){
        $link = create_connection();
        $sql = "UPDATE message SET content='$content' WHERE id='$contentID'";
        $result = execute_db($link,'guestbook',$sql);
        
        header("location:member.php");
        }else{
            header("location:index.php");
        }
        exit();
?>