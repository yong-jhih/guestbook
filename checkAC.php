<?php
    require_once "db_connect.php";
    $testAC=$_POST['newAC'];
    $link = create_connection();
    $sql = "SELECT * from member WHERE memberAC='$testAC'";
    $result = execute_db($link,'guestbook',$sql);
    if(mysqli_num_rows($result)!=0){
        echo  json_encode($testAC);
        mysqli_free_result($result);
    }
    exit();
?>