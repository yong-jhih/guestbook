<?php
    require_once 'db_connect.php';
    $deleteID = $_POST['deleteID'];
    if(isset($_COOKIE['passed'])){
        $link = create_connection();
        $sql = "DELETE FROM message where id='$deleteID'";
        $result = execute_db($link,'guestbook',$sql);
        echo  json_encode($deleteID);
        header("location:member.php");
        }else{
            header("location:index.php");
        }
        exit();
?>