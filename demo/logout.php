<?php
    session_start();

    setcookie('passed',null);
    setcookie('memberName',null);
    setcookie('memberID',null);
    setcookie('memberPWL',null);
    
    session_destroy();
    header("location:index.php");
    exit();
?>