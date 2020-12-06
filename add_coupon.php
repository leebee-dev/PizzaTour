<?php
include_once("db.php");
include "session_check.php";
if($admin_login){
    echo '<script>
    var conf = confirm("적립하시겠습니까?");
    if(conf==TRUE){
        //적립진행
    }
    else{
        location.href="./coupon.php";
    }
    </script>';

$userid = $_GET['id'];

$sql = mq("SELECT * FROM User WHERE `userID`="."'".$userid."';");
while ($row = mysqli_fetch_array($sql)) {
    $count = $row[6];
}
$count = $count+1;
mq("UPDATE User Set `count`=".$count." WHERE `userID`="."'".$userid."';");
echo "<script>alert('적립완료되었습니다.');location.href='./coupon.php';</script>"; 
}
else{
    echo "<script>alert('관리자 로그인이 필요합니다.');location.href='./admin_login_form.php';</script>"; 
}

?>
