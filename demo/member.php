<?php
    /**
    * @package Example-application
    */
    require '../libs/Smarty.class.php';
    require 'db_connect.php';
    $smarty = new Smarty;
    //$smarty->force_compile = true;
    $smarty->debugging = true;
    $smarty->caching = true;
    $smarty->cache_lifetime = 120;
    $smarty->display('member.tpl');

    if(isset($_COOKIE['passed'])){
        $passed = $_COOKIE['passed'];
        $memberName = $_COOKIE['memberName'];
        $link = create_connection();
        $sql = "SELECT * from member WHERE memberID = '$memberID'";
        $result = execute_db($link, 'guestbook', $sql);
        $member = mysqli_fetch_array($result);
        $memberAC = $member['memberAC'];
        $memberName = $member['memberName'];
        $email = $member['email'];
        mysqli_close($link);

        $memberID = $_COOKIE['memberID'];
        $pwl = (int) $_COOKIE['memberPWL'];
        $pw = "";
        for ($i = 0; $i < $pwl; $i++) {
            $pw = $pw . "*";
        }

    }else{
        header("location:index.php");
    }

    $recordPerPage = 100;
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
        $database = "guestbook";
        $link = create_connection();
        $sql = "SELECT * from message WHERE memberID = '$memberID' ORDER BY id DESC";
        $result = execute_db($link, "guestbook", $sql);
        $totalRecords = mysqli_num_rows($result);
        $totalPages = ceil($totalRecords / $recordPerPage);
        $startedRecord = $recordPerPage * ($page - 1);
        mysqli_data_seek($result, $startedRecord);
    }

    $smarty->assign("passed",$passed);
    $smarty->assign("memberName",$memberName);
    $smarty->assign("memberAC",$memberAC);
    $smarty->assign("pw",$pw);
    $smarty->assign("email",$email);

    // $j = 1;
    // while ($row = mysqli_fetch_assoc($result) and $j <= $recordPerPage) {
    //     echo "<table><tr><td>" . $row['subject'] . "</td><td>" . $row['date'] . "</td><td class='content'><form action='modifyContent.php' method='POST'><input type='hidden' name='contentID' value='" . $row['id'] . "'><input type='text' name='content' id='" . $row['id'] . "' value='" . $row['content'] . "'></td><td><button type='submit'>修改內容</button></form><button onclick='Delete(" . $row['id'] . ")'>刪除</button></td></tr>";
    //     $j++;
    // }

?>