<?php
    setcookie('memberID',null);
    setcookie('memberName',null);
    setcookie('passed',null);
    header("location:index.php");
    exit();
?>