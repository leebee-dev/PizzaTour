<?php
extract($_POST);
if (isset($_POST)) {
    require_once './config/config.php';
    $c = new MemberClass();

    $user = $c->getUser($userID, $password);

    if ($user != false) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['user'] = $userID;
        echo("<script>alert('로그인 되었습니다');location.href='../index.php';</script>"); 
       } else {
        echo("<script>alert('로그인 실패하였습니다');location.href='../login_form.php';</script>"); 
    }
} else {// 입력받은 데이터에 문제가 있을 경우
    echo("<script>alert('로그인 실패하였습니다');location.href='../login_form.php';</script>");   
}
?>

