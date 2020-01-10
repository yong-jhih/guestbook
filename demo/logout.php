<?php
    setcookie('memberID',null);
    setcookie('memberName',null);
    setcookie('passed',null);
    setcookie('memberPWL',null);
    header("location:index.php");
    exit();
?>