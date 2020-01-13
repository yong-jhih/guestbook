<?php
    require "mysqlilib.php";
    ini_set('display_errors','off');

    $testAC=$_POST['newAC'];
    $db=new StockDB('localhost','root','','guestbook');
    $qstr = "SELECT memberAC from member WHERE memberAC='$testAC'";
    $data = $db->query($qstr);
    $totalRecords = $data->num_rows;

    if($totalRecords!=0){
        header('Content-Type: application/json; charset=utf-8');
        echo  json_encode($testAC);
    }
?>