<?php
include '../session_check.php';

if ($admin_login) {
    session_destroy();
    echo '<script>alert("로그아웃 되었습니다.");</script>';
    echo '<meta http-equiv="refresh" content="0; url=../index.php" />';
}
else {
    echo '<script>alert("로그인 되어있지 않습니다.");</script>';
    echo '<meta http-equiv="refresh" content="0; url=../index.php" />';
}
?>