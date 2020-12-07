<?php
extract($_POST);
if (isset($_POST)) {
    if($password==$pwd_chk){
    require_once './config/config.php';
    $c = new MemberClass();
    // 동일한 ID 등록되어 있는지 체크
    if ($c->isUserExisted($userID)) {
        echo("<script>alert('사용중인 아이디 입니다.');location.href='../user_register_form.php';</script>"); 
      } else {
        // 등록
        $user = $c->storeUser($userID, $name, $email, $password);
        if ($user) {// 관리자 등록 성공
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['user'] = $userID; 
            echo("<script>alert('회원가입 되었습니다');location.href='../index.php';</script>"); 
        } else {
            // 등록 실패
            echo("<script>alert('회원가입 실패하였습니다');location.href='../user_register_form.php';</script>"); 
        }
    }
}else {//비밀번호 확인 입력오류
    echo("<script>alert('비밀번호를 다시 확인해주세요');location.href='../user_register_form.php';</script>"); 
}
}else {// 입력받은 데이터에 문제가 있을 경우
    echo("<script>alert('회원가입 실패하였습니다');location.href='../user_register_form.php';</script>"); 
}
?>

