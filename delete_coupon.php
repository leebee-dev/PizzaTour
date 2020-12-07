<?php
include_once("db.php");
include "session_check.php";

if(isset($_SESSION['user'])){
    $userid = $_SESSION['user'];

    mq("UPDATE User Set `count`= 0 WHERE `userID`="."'".$userid."';");
    echo "<script>alert('사용완료되었습니다.');location.href='./coupon.php';</script>"; 
    }

?>